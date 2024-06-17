<?php require('view/parcials/head.php') ?>
<?php require('view/parcials/nav.php'); ?>

<?php require('view/parcials/header.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="lg:w-0 lg:flex-1">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    <span class="block text-xl font-medium text-gray-900">
                        This is <?= $heading?>
                    </span>
                    <span class="block text-xl font-medium text-indigo-600">
                        Overview
                    </span>
                </h2>
            </div>
        </div>
    </div>
</main>
<?php require('view/parcials/footer.php') ?>