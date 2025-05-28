<?php

// includes/footer.php

?>

<!-- Footer -->

<footer id="footer" class="bg-dark dark">

    <div class="container">

        <!-- Footer 1st Row -->

        <div class="footer-first-row row">

            
            <div class="col-lg-4 col-md-6">

                <h5 class="text-muted">Contacts</h5>

                <ul class="list-posts">

                    <li>

                        <a href="blog-post.html" class="title">Address</a>

                        <span class="date">Jalan Durian Barat III No 10, Jagakarsa, Jakarta Selatan</span>

                    </li>

                    <li>

                        <a href="blog-post.html" class="title">Phone</a>

                        <span class="date">082-12345-8276</span>

                    </li>



                </ul>

            </div>

            <div class="col-lg-5 col-md-6">

                <h5 class="text-muted mb-3">Social Media</h5>

                <a href="https://www.facebook.com/cafeserendipityjagakarsa/" target="_blank" class="icon icon-social icon-circle icon-sm icon-facebook"><i class="fa fa-facebook"></i></a>

                <a href="https://maps.app.goo.gl/4xnbKGLrb6gD1SHF6" target="_blank" class="icon icon-social icon-circle icon-sm icon-google"><i class="fa fa-google"></i></a>

                <a href="http://instagram.com/cafeserendpity" target="_blank" class="icon icon-social icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>

            </div>

        </div>

        <!-- Footer 2nd Row -->

        <div class="footer-second-row">

            <span class="text-muted">Copyright Cafe Serendipity ©2025. Made with love by Pood.</span>

        </div>

    </div>

    <!-- Back To Top -->

    <button id="back-to-top" class="back-to-top"><i class="ti ti-angle-up"></i></button>

</footer>



</div> <!-- Close body-wrapper -->



<!-- JS Core -->

<script src="dist/js/core.js" defer></script>

<script>
    
    document.addEventListener('DOMContentLoaded', function() {
        // Only process a few images at a time to prevent mobile browser hanging
        const images = document.querySelectorAll('img:not([loading])');
        
        // Add lazy loading in small batches
        let processed = 0;
        const batchSize = 3; // Much smaller batch
        
        function processBatch() {
            const end = Math.min(processed + batchSize, images.length);
            
            for (let i = processed; i < end; i++) {
                images[i].setAttribute('loading', 'lazy');
            }
            
            processed = end;
            
            // Continue processing after page is fully loaded
            if (processed < images.length) {
                setTimeout(processBatch, 200);
            }
        }
        
        // Start processing after a delay to let page finish loading
        setTimeout(processBatch, 500);
    });
        
</script>

</body>

</html>