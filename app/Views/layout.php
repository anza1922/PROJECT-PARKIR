<?= $this->include('components/header') ?>
<?= $this->include('components/sidebar') ?>
<?= $this->include('components/topbar') ?>
<div class="container-fluid px-4">
<?= $this->renderSection('content') ?>
</div>
<?= $this->include('components/footer') ?>
<?= $this->include('components/script') ?>