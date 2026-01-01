<?php wp_head(); ?>
<nav class="">
    <ul class="w-full flex justify-around p-4 bg-gray-200">
        <li class="transition-all duration-75 hover:scale-105 hover:text-purple-400"><a
                href="<?php echo home_url(); ?>">Home</a></li>
        <li class="transition-all duration-75 hover:scale-105 hover:text-purple-400"><a
                href="<?php echo home_url('/about'); ?>">About</a>
        </li>
        <li class="transition-all duration-75 hover:scale-105 hover:text-purple-400"><a
                href="<?php echo home_url('/blog'); ?>">Blog</a></li>
    </ul>
</nav>