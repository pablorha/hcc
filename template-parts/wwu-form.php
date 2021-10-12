<!-- <php?

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $year = $_POST['year'];
    $areasofinterest = $_POST['areasofinterest'];

    $emailTo = "pablo@ripehouseadvisory.com.au";
    $headers = "From: " . $emailFrom;
    $txt = "My name is " . $name . ".\n\n My year of graduation is " . $year . ".\n\n and My area of interest is " . $areasofinterest;

    mail($mailTo, $areasofinterest, $txt, $headers );
    header("Location: index.php?mailsend");
}

?> -->
<section id="wwu-form" class="section wwu-form">
    <div class="section-container">
    <!-- <form action="" method="POST">
        
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Lucho Zapata">
        </div>

        <div class="form-group">
            <label for="">Email Address</label>
            <input type="text" name="email" placeholder="luchoontheroof@gmail.com">
        </div>

        <div class="form-group">
            <label for="">Year of graduation or expected graduation</label>
            <input type="text" name="year" placeholder="<?php the_time( 'Y' ); ?>">
        </div>

        <div class="form-group">
            <label for="">Areas of clinical interest</label>
            <input type="text" name="areasofinterest" placeholder="Kids">
        </div>

        <div class="form-group">
            <label for="">Are you open to a position in the near future?</label>
            <select name="yes" id="yes">
                <option value=""></option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>

        <button type="submit" name="submit"><h2 data-aos="fade" data-aos-duration="2000">Submit</h2></button>

        
    </form> -->
    <?php echo do_shortcode( '[contact-form-7 id="33" title="Work with us Form"]' ); ?>
    </div>
</section>