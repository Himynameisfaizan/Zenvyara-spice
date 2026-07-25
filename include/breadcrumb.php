<style>
    .breadcrumb-section {
        background-image: url('assets/images/banner/size-extra-large-wide/spice-banner.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        padding: 80px 0;
        text-align: center;
        color: var(--bs-white);
        border-bottom: 3px solid var(--bs-primary);
    }

    .breadcrumb-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(var(--bs-black-rgb), 0.65); /* Dark overlay for text visibility */
        z-index: 1;
    }

    .breadcrumb-content {
        position: relative;
        z-index: 2;
    }

    .breadcrumb-title {
        font-family: 'Playfair Display', serif; /* Imported in your root */
        font-size: 38px;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 12px;
        letter-spacing: 1px;
    }

    .breadcrumb-nav {
        list-style: none;
        padding: 0;
        margin: 0;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        font-family: var(--bs-body-font-family);
        font-size: 15px;
        font-weight: 500;
    }

    .breadcrumb-nav li {
        display: flex;
        align-items: center;
    }

    .breadcrumb-nav li a {
        color: var(--bs-primary);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .breadcrumb-nav li a:hover {
        color: var(--bs-white);
    }

    .breadcrumb-nav li.active {
        color: var(--bs-gray-400);
    }

    .breadcrumb-nav li:not(:last-child)::after {
        content: '\f105';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        margin-left: 12px;
        color: var(--bs-gray-500);
        font-size: 12px;
    }

    @media (max-width: 768px) {
        .breadcrumb-section {
            padding: 60px 0;
        }
        .breadcrumb-title {
            font-size: 28px;
        }
        .breadcrumb-nav {
            font-size: 14px;
        }
    }
</style>

<?php global $site; ?>
<section class="breadcrumb-section">
    <div class="breadcrumb-overlay"></div>
    <div class="container">
        <div class="breadcrumb-content">
            <h1 class="breadcrumb-title text-primary">
                <?php echo isset($pageTitle) ? $pageTitle : 'About Us'; ?>
            </h1>
            <ul class="breadcrumb-nav">
                <li><a href="<?php echo $site; ?>">Home</a></li>
                <li class="active">
                    <?php echo isset($pageTitle) ? $pageTitle : 'About Us'; ?>
                </li>
            </ul>
        </div>
    </div>
</section>