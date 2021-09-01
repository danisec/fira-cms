<?= $this->extend('layout/article'); ?>


<?= $this->section('content'); ?>

<!-- section main content -->
<section class="main-content">
    <div class="container-xl">

        <div class="row">

            <div class="col-md-4">
                <!-- contact info item -->
                <div class="contact-item bordered rounded d-flex align-items-center">
                    <span class="icon icon-phone"></span>
                    <div class="details">
                        <h3 class="mb-0 mt-0">Phone</h3>
                        <p class="mb-0">+1-202-555-0135</p>
                    </div>
                </div>
                <div class="spacer d-md-none d-lg-none" data-height="30"></div>
            </div>

            <div class="col-md-4">
                <!-- contact info item -->
                <div class="contact-item bordered rounded d-flex align-items-center">
                    <span class="icon icon-envelope-open"></span>
                    <div class="details">
                        <h3 class="mb-0 mt-0">E-Mail</h3>
                        <p class="mb-0">hello@example.com</p>
                    </div>
                </div>
                <div class="spacer d-md-none d-lg-none" data-height="30"></div>
            </div>

            <div class="col-md-4">
                <!-- contact info item -->
                <div class="contact-item bordered rounded d-flex align-items-center">
                    <span class="icon icon-map"></span>
                    <div class="details">
                        <h3 class="mb-0 mt-0">Location</h3>
                        <p class="mb-0">California, USA</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="spacer" data-height="50"></div>

    </div>
</section>

<?= $this->endSection(); ?>