<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linchpin Coffee | Brew Guide</title>
    <link href="https://fonts.googleapis.com/css?family=Spartan:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../sass/brew.scss">
    <link rel="stylesheet" href="../css/brew.css">
</head>
<body>

    <?php
        include "header.php";
    ?>

    <div class="banner d-flex flex-column justify-content-center align-items-center">
        <h1>Brewing Guide</h1>
        <div class="divide"></div>
    </div>
    
    <div class="brew-guide d-flex flex-column flex-wrap justify-content-between align-items-center">
        <div class="pour-over d-flex flex-column flex-lg-row flex-nowrap justify-content-between align-items-center">
            <img src="../images/william-moreland-KoUphpq4a6k-unsplash.jpg" alt="pour over coffee with a glass chemex">
            <div class="pour-over-description">
                <h2>Pour Over</h2>
                <p>Pour-over coffee is coffee at its most basic: just you, a cup, a filter, and a funnel, without any machines to get in the way. By pouring a slow, steady stream of hot water over coffee grounds, you can extract a full-flavored but delicate cup of coffee.</p>
                <a  class="button btn" type="button" data-toggle="modal" data-target="#pour-over">Learn More <i class="fas fa-arrow-right"></i></a>
                
                <!-- Modal -->
                <div class="modal fade" id="pour-over" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="pour-over">Pour Over</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <h3>What You'll Need</h3>
                            <div class="content">
                                <div class="equipment">
                                    <ul>
                                        <li>30 grams of whole bean coffee</li>
                                        <li>Scale</li>
                                        <li>Grinder</li>
                                        <li>Pour Over brewer</li>
                                        <li>Appropriate Filter</li>
                                        <li>Kettle</li>
                                        <li>Hot Water (195-200 F)</li>
                                        <li>Timer</li>
                                    </ul>
                                </div>
                            </div>
                            <h3>Let's Brew This!</h3>
                            <div class="content">
                                <div class="directions">
                                    <ul>
                                        <li>Start by bringing 500 grams of water to temp & let cool</li>
                                        <li>Crease edges of paper filter in opposite directions to ensure fit then place filter in dripper</li>
                                        <li>Rinse paper filter (to avoid paper taste) and discard water used for rinsing</li>
                                        <li>Place dripper on top of carafe</li>
                                        <li>Weigh and grind coffee (grind to roughly the size of granulated table salt)</li>
                                        <li>Add ground coffee to filter; make sure the coffee bed is level</li>
                                        <li>Add water to "bloom" grounds</li>
                                        <li>Start timer and gently saturate grounds with hot water, pouring in a circular motion in the center of the coffee bed</li>
                                        <li>This will allow the coffee to "bloom" or de-gas</li>
                                        <li>Add only enough water to saturate the grounds; stop before coffee starts to flow from bottom of filter</li>
                                        <li>Wait 30–45 seconds</li>
                                        <li>Slowly pour remaining water</li>
                                        <li>Keep the liquid level in the dripper between ½ and ¾ full</li>
                                        <li>Avoid pouring along the edges of the coffee bed</li>
                                        <li>Control brewing time and liquid level by slowing or speeding up the pour as needed</li>
                                        <li>Total brew time should be 3–4 minutes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
                

        <div class="french-press d-flex flex-column-reverse flex-lg-row flex-nowrap justify-content-between align-items-center">
            <div class="french-press-description">
                <h2>French Press</h2>
                <p>A classic for a reason, the French press could hardly be easier to use. No worrying about how long it takes for water to flow through the coffee bed, just get that water in there and let it steep — it’s as easy as brewing a cup of tea.</p>
                <a  class="button btn" type="button" data-toggle="modal" data-target="#french-press">Learn More <i class="fas fa-arrow-right"></i></a>

                <!-- Modal -->
                <div class="modal fade" id="french-press" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="french-press">French Press</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h3>What You'll Need</h3>
                                <div class="content">
                                    <div class="equipment">
                                        <ul>
                                            <li>60 grams of whole bean coffee</li>
                                            <li>Scale</li>
                                            <li>Grinder</li>
                                            <li>The French Press itself</li>
                                            <li>Stirring utensil</li>
                                            <li>Kettle</li>
                                            <li>Hot Water (195-200 F)</li>
                                            <li>Timer</li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Let's Brew This!</h3>
                                <div class="content">
                                    <div class="directions">
                                        <ul>
                                            <li>Start by heating 900 grams of water to boil and let cool</li>
                                            <li>Grind the appropriate amount of coffee just before brewing</li>
                                            <li>Grind should be medium-coarse roughly the size of coarsely cracked pepper</li>
                                            <li>Add ground coffee to French press carafe and level the bed</li>
                                            <li>Wet all grounds and fill the carafe about halfway with hot water</li>
                                            <li>Stir the grounds to encourage even brewing–this helps to release CO2 gas</li>
                                            <li>Add the remaining water</li>
                                            <li>Pour evenly to the top</li>
                                            <li>Replace plunger</li>
                                            <li>Press down just enough to create a seal. Let the coffee brew about 4 minutes</li>
                                            <li>At about 4 minutes, the coffee is ready to filter</li>
                                            <li>Press down slowly to avoid overly-agitating the coffee. Align the spout so it’s ready to pour</li>
                                            <li>Serve and enjoy!</li>
                                            <li>Decant any remaining coffee to fully stop brewing in the press</li>
                                            <li>Control brewing time and liquid level by slowing or speeding up the pour as needed</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="../images/sonny-ravesteijn-53A4xySzRic-unsplash.jpg" alt="french press coffee with a small bowl of coffee beans">
        </div>

        <div class="cold-brew d-flex flex-column flex-lg-row flex-nowrap justify-content-between align-items-center">
            <img src="../images/wade-austin-ellis-yFjq8vqMxP4-unsplash.jpg" alt="cold brew coffee being poured into a glass">
            <div class="cold-brew-description">
                <h2>Cold Brew</h2>
                <p>One of the main advantages of cold brew coffee is its simplicity. So, if you’re not a fan of acidic flavors, and prefer your iced coffee with more of a smooth, mild taste, cold brew coffee is the summer or year-round (no judgments!) brew method for you.</p>
                <a  class="button btn" type="button" data-toggle="modal" data-target="#cold-brew">Learn More <i class="fas fa-arrow-right"></i></a>

                <!-- Modal -->
                <div class="modal fade" id="cold-brew" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cold-brew">Cold Brew</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h3>What You'll Need</h3>
                                <div class="content">
                                    <div class="equipment">
                                        <ul>
                                            <li>85 grams of whole bean coffee</li>
                                            <li>Grinder</li>
                                            <li>Cold brew pitcher</li>
                                            <li>Kettle</li>
                                            <li>Room Temperature Water</li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Let's Brew This!</h3>
                                <div class="content">
                                    <div class="directions">
                                        <ul>
                                            <li>Start by grinding your coffee beans to coarse or medium coarse</li>
                                            <li>Add grounded beans to filter</li>
                                            <li>Fill your kettle with room temperature water</li>
                                            <li>Slowly pour water over the grounds, until pitcher is filled to the max line</li>
                                            <li>Stir coffee grounds to start the brewing process</li>
                                            <li>Allow coffee to brew in your refrigerator for 12-24 hours, depending on your preference</li>
                                            <li>When done, simply remove filter with coffee grounds to stop the brewing process</li>
                                            <li>Cold brew concentrate can be stored in the fridge for up to 2 weeks</li>
                                            <li>To serve, mix your cold brew concentrate with ice, water, or milk to create your perfect drink</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
        include "footer.php";
    ?>

    <script src="https://kit.fontawesome.com/6600f7d498.js" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>