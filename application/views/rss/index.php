<?php // views/rss/index.php view template file

$this->load->view($this->config->item('theme') . 'header');

?>
<div class="news-container container">
<?php
//loops through array and assigns array value to $item variable (in this case, an xml object)
foreach($stories["newsItem"] as $newsItem => $item) {
    echo '<article class="row news-item col-lg-9 col-sm-12"><h2><a href="' . $item->link . '">' . $item->title . '</a></h2>';
  echo $item->description . '</article>';
} ?>

<div class="row col-lg-6 col-sm-12">
    <form>
        <div class="form-group">
            <label for="firstName">First name</label>
            <input type="text" id="firstName" placeholder="First name" class="form-control">
        </div>
        <div class="form-group">
            <label for="lastName">Last name</label>
            <input type="text" id="lastName" placeholder="Last name" class="form-control">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox">Check here
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="radioButtons" id="radioOne" value="radioOne" checked>
                This is option one
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="radioButtons" id="radioTwo" value="radioTwo" checked>
                This is option two
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="radioButtons" id="radioThree" value="radioThree" checked>
                This is option three
            </label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</div><!-- end .container div -->
<?php
$this->load->view($this->config->item('theme') . 'footer');
