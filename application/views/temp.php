
<?php $this->load->view("header",array('title' => $title, 'description' => $description)); ?>

<!-- page content -->
<div class="page-content"> 
    <?php $this->load->view($main); ?>
 

<?php $this->load->view("footer"); ?>

            
        