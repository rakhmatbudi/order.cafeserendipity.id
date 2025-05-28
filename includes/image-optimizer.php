<?php
// includes/image-optimizer.php
// Image optimization and processing functions

/**
 * Generate responsive image versions
 * Call this script to create optimized versions of your images
 */
class ImageOptimizer {
    
    private $sizes = [
        'small' => 300,
        'medium' => 600,
        'large' => 900
    ];
    
    private $quality = [
        'jpeg' => 85,
        'png' => 9,
        'webp' => 85
    ];
    
    /**
     * Process all images in the assets directory
     */
    public function processAllImages($source_dir = 'assets/img/static/') {
        $processed = 0;
        $errors = [];
        
        // Create directories if they don't exist
        $this->createDirectories($source_dir);
        
        // Get all image files
        $images = glob($source_dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
        
        foreach ($images as $image) {
            try {
                $this->processImage($image);
                $processed++;
                echo "Processed: " . basename($image) . "\n";
            } catch (Exception $e) {
                $errors[] = basename($image) . ': ' . $e->getMessage();
                echo "Error processing " . basename($image) . ": " . $e->getMessage() . "\n";
            }
        }
        
        echo "\nProcessed {$processed} images\n";
        if (!empty($errors)) {
            echo "Errors: " . count($errors) . "\n";
        }
        
        return ['processed' => $processed, 'errors' => $errors];
    }
    
    /**
     * Process a single image
     */
    public function processImage($image_path) {
        $path_info = pathinfo($image_path);
        $source_dir = $path_info['dirname'] . '/';
        
        // Create optimized version
        $this->createOptimizedVersion($image_path, $source_dir . 'optimized/');
        
        // Create responsive versions
        foreach ($this->sizes as $size_name => $width) {
            $this->createResponsiveVersion($image_path, $source_dir . 'responsive/', $size_name, $width);
        }
        
        // Create WebP version
        $this->createWebPVersion($image_path, $source_dir);
    }
    
    /**
     * Create directories for optimized images
     */
    private function createDirectories($source_dir) {
        $dirs = [
            $source_dir . 'optimized/',
            $source_dir . 'responsive/',
            $source_dir . 'webp/'
        ];
        
        foreach ($dirs as $dir) {
            if (!is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
        }
    }
    
    /**
     * Create optimized version with better compression
     */
    private function createOptimizedVersion($source, $dest_dir) {
        $path_info = pathinfo($source);
        $dest = $dest_dir . $path_info['filename'] . '_opt.' . $path_info['extension'];
        
        if (!file_exists($dest) || filemtime($source) > filemtime($dest)) {
            $this->optimizeImage($source, $dest);
        }
    }
    
    /**
     * Create responsive versions
     */
    private function createResponsiveVersion($source, $dest_dir, $size_name, $width) {
        $path_info = pathinfo($source);
        $dest = $dest_dir . $path_info['filename'] . '_' . $size_name . '.' . $path_info['extension'];
        
        if (!file_exists($dest) || filemtime($source) > filemtime($dest)) {
            $this->resizeImage($source, $dest, $width);
        }
    }
    
    /**
     * Create WebP version
     */
    private function createWebPVersion($source, $dest_dir) {
        if (!function_exists('imagewebp')) {
            return false;
        }
        
        $path_info = pathinfo($source);
        $dest = $dest_dir . 'webp/' . $path_info['filename'] . '.webp';
        
        if (!file_exists($dest) || filemtime($source) > filemtime($dest)) {
            $this->convertToWebP($source, $dest);
        }
    }
    
    /**
     * Optimize image with better compression
     */
    private function optimizeImage($source, $dest) {
        $image_info = getimagesize($source);
        $mime_type = $image_info['mime'];
        
        switch ($mime_type) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($source);
                imagejpeg($image, $dest, $this->quality['jpeg']);
                break;
                
            case 'image/png':
                $image = imagecreatefrompng($source);
                imagealphablending($image, false);
                imagesavealpha($image, true);
                imagepng($image, $dest, $this->quality['png']);
                break;
                
            case 'image/gif':
                copy($source, $dest); // GIFs are usually already optimized
                break;
        }
        
        if (isset($image)) {
            imagedestroy($image);
        }
    }
    
    /**
     * Resize image to specific width
     */
    private function resizeImage($source, $dest, $max_width) {
        $image_info = getimagesize($source);
        $original_width = $image_info[0];
        $original_height = $image_info[1];
        $mime_type = $image_info['mime'];
        
        // Don't upscale images
        if ($original_width <= $max_width) {
            copy($source, $dest);
            return;
        }
        
        // Calculate new dimensions
        $ratio = $max_width / $original_width;
        $new_width = $max_width;
        $new_height = intval($original_height * $ratio);
        
        // Create new image
        $new_image = imagecreatetruecolor($new_width, $new_height);
        
        // Load source image
        switch ($mime_type) {
            case 'image/jpeg':
                $source_image = imagecreatefromjpeg($source);
                break;
            case 'image/png':
                $source_image = imagecreatefrompng($source);
                imagealphablending($new_image, false);
                imagesavealpha($new_image, true);
                break;
            case 'image/gif':
                $source_image = imagecreatefromgif($source);
                break;
            default:
                return false;
        }
        
        // Resize
        imagecopyresampled($new_image, $source_image, 0, 0, 0, 0, 
                          $new_width, $new_height, $original_width, $original_height);
        
        // Save resized image
        switch ($mime_type) {
            case 'image/jpeg':
                imagejpeg($new_image, $dest, $this->quality['jpeg']);
                break;
            case 'image/png':
                imagepng($new_image, $dest, $this->quality['png']);
                break;
            case 'image/gif':
                imagegif($new_image, $dest);
                break;
        }
        
        // Clean up
        imagedestroy($new_image);
        imagedestroy($source_image);
    }
    
    /**
     * Convert image to WebP format
     */
    private function convertToWebP($source, $dest) {
        if (!function_exists('imagewebp')) {
            return false;
        }
        
        $image_info = getimagesize($source);
        $mime_type = $image_info['mime'];
        
        switch ($mime_type) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($source);
                break;
            case 'image/png':
                $image = imagecreatefrompng($source);
                imagealphablending($image, true);
                imagesavealpha($image, true);
                break;
            case 'image/gif':
                $image = imagecreatefromgif($source);
                break;
            default:
                return false;
        }
        
        // Convert to WebP
        $result = imagewebp($image, $dest, $this->quality['webp']);
        imagedestroy($image);
        
        return $result;
    }
}

// CLI usage
if (php_sapi_name() === 'cli') {
    echo "Image Optimizer\n";
    echo "==============\n\n";
    
    $optimizer = new ImageOptimizer();
    $result = $optimizer->processAllImages();
    
    echo "\nOptimization complete!\n";
    echo "Processed: {$result['processed']} images\n";
    
    if (!empty($result['errors'])) {
        echo "Errors: " . count($result['errors']) . "\n";
        foreach ($result['errors'] as $error) {
            echo "  - {$error}\n";
        }
    }
}
?>