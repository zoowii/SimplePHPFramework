{asset file='site/config.js'}
{asset file='site/main.js' type='js'}
{asset file='site/styles.css' type='css'}
<div class='container'>
    <div class="navbar">
        <div class="navbar-inner">
            <a class="brand website-link" href="#">Title</a>
            <ul class='nav'>
                <li class='active'>
                    <a href='#'>Home</a>
                </li>
                <li><a href='#' class="blog-link">Blog</a></li>
                <li><a href='#' class="aboutme-link">About me</a></li>
            </ul>
            <form class="navbar-search pull-right">
                <input type="text" class="search-query" placeholder="Search">
            </form>
        </div>
    </div>
    <div class='content'>
        <ul class="breadcrumb">
            <li><a href="#">Home</a> <span class="divider">/</span></li>
            <li><a href="#">Library</a> <span class="divider">/</span></li>
            <li class="active">Data</li>
        </ul>
        <div class='tabbable tabs-right'>
            <ul class='nav nav-tabs'>
                <li class='active'>
                    <a data-toggle='tab' href='#rA'>Section 1</a>
                </li>
                <li>
                    <a data-toggle='tab' href='#rB'>Section 2</a>
                </li>
                <li>
                    <a data-toggle='tab' href='#rC'>Section 3</a>
                </li>
            </ul>
            <div class='tab-content'>
                <div id='rA' class='tab-pane active'>
                    <code>Section A</code>
                </div>
                <div id='rB' class='tab-pane'>
                    <code>Section B</code>
                </div>
                <div id='rC' class='tab-pane'>
                    <code>Section C</code>
                </div>
            </div>
        </div>
    </div>
</div>