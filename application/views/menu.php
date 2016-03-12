 <!------- Menu File ------->
<!-- Main navigation -->
<ul class="navigation">
    <li>
        <a href="<?php echo site_url('index'); ?>">Home</a> 
    </li>
    <li>
        <a href="<?php echo site_url('about'); ?>">About Us</a>
        <ul>
            <li><a href="<?php echo site_url('about/ministry'); ?>">Flm Ministry</a></li>
            <li><a href="<?php echo site_url('about/pastor'); ?>">Pastor Kato</a></li>
            <li><a href="<?php echo site_url('about/believe'); ?>">What We Believe</a></li>
            <li><a href="<?php echo site_url('about/church'); ?>">Chrisco UpperRoom Church</a></li>
        </ul>
    </li>
    <li>
        <a href="<?php echo site_url('activity'); ?>">What We Do</a>
        <ul>
            <li><a href="<?php echo site_url('activity/outreach'); ?>">Outreach</a></li>
            <li><a href="<?php echo site_url('activity/kesha'); ?>">Kesha</a></li>    
            <li><a href="<?php echo site_url('activity/crusade'); ?>">Crusades</a></li>   
        </ul>
    </li>

    <li>
        <a href="<?php echo site_url('multimedia'); ?>">Multimedia</a>
        <ul>
            <li><a href="<?php echo site_url('multimedia/gallery'); ?>">Photo Gallery</a></li>
            <li><a href="<?php echo site_url('multimedia/events'); ?>">Fly-m Events</a></li> 
            <?php if($this->session->userdata('role_id') == 2 || $this->session->userdata('role_id') == 3): ?>
                <li><a href="<?php echo site_url('account/event_create'); ?>">Create New Event</a></li> 
            <?php endif; ?>
        </ul>
    </li> 

    <li>
        <a href="<?php echo site_url('blog'); ?>">Blog</a>
        <?php if($this->session->userdata('role_id') == 2 || $this->session->userdata('role_id') == 3): ?>
            <ul><li><a href="<?php echo site_url('account/blog_create'); ?>">Add a Blog Post</a></li></ul>
        <?php endif; ?>    
    </li>  

    <li><a href="<?php echo site_url('contact'); ?>">Contact Us</a></li>

    <?php if($this->session->userdata('is_logged_in')): ?>
    <li>
        <a href="<?php echo site_url('account'); ?>"><span class="fa fa-user"></span> My Account</a>
        <ul><li><a href="<?php echo site_url('index/logout'); ?>"><span class="fa fa-sign-out"></span> Logout (<?php echo $this->session->userdata('user_name')?>)</a></li></ul> 
    </li>
    <?php else: ?>
        <li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="fa fa-user"></span> Account</a></li>
    <?php endif; ?>    
</ul>
<!-- ./navigation -->