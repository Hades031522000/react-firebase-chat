<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
   $about_title = $row['about_title'];
    $about_content = $row['about_content'];
    $about_banner = $row['about_banner'];
}
?>
<!-- facebook share button -->
<meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Your Website Title" />
<meta property="og:description"   content="Your description" />
<meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
<!-- end of facebook share button -->

<div class="page-banner" style="background-image: url(assets/uploads/<?php echo $about_banner; ?>);">
    <div class="inner">
        <h1><?php echo $about_title; ?></h1>
    </div>
</div>

<div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-12">
                
                <p>
                    <?php echo $about_content; ?>
                </p>
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/tl_PH/sdk.js#xfbml=1&version=v22.0&appId=698526746019138"></script>
                <div class="fb-page" data-href="https://www.facebook.com/davaohomebuilders" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/davaohomebuilders" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/davaohomebuilders">Davao Home Builders Center</a></blockquote></div>

                <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                    fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                    <!-- Your share button code -->
                    <div class="fb-share-button" 
                    data-href="https://www.davaohomebuilderscenter.com/your-page.html" 
                    data-layout="button_count">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- n94dkm8rwfc7 -->
<script>
    const client = StreamChat.getInstance("{{ api_key }}");
// you can still use new StreamChat("api_key");

await client.connectUser(
  {
    id: "jlahey",
    name: "Jim Lahey",
    image: "https://i.imgur.com/fR9Jz14.png",
  },
  "{{ chat_user_token }}",
);


const client = StreamChat.getInstance("{{ api_key }}");
const channel = client.channel("messaging", "travel", {
  name: "Awesome channel about traveling",
});

// fetch the channel state, subscribe to future updates
const state = await channel.watch();

const text = "I’m mowing the air Rand, I’m mowing the air.";

const response = await channel.sendMessage({
  text,
  customField: "123",
});

channel.on("message.new", (event) => {
  console.log("received a new message", event.message.text);
  console.log(
    `Now have ${channel.state.messages.length} stored in local state`,
  );
});
</script>
<?php require_once('footer.php'); ?>