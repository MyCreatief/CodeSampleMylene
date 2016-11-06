<?php
include 'includes/header.php';
include 'includes/run_json.php';
?>

    <section >
        <article class="wow fadeIn" >
            <header >
                <h2 >json & php</h2 >
            </header >
            <p >
                JSON is more fun if you use it in combination with javascript,
                because it is not limited to a server-side encryption.
            </p >
        </article >

        <article class="wow fadeIn amazing_buttons" >
            <header >
                <h2 >links and amazing hover effects</h2 >
            </header >

            <p >
                <?php
                $buttons = new json_oop('buttons');
                ?>
            </p >
        </article >

        <article class="wow fadeIn amazing_links" >
            <header >
                <h2 >Buttons and equally amazing hover effects</h2 >
            </header >

            <p >
                <?php
                $links = new json_oop('links');
                ?>
            </p >

        </article >
    </section >

<?php
include 'includes/footer.php';
?>