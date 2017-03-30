<?php
$filename ='build';

$title = 'Build';

require_once __DIR__ . '/head.php';
require_once __DIR__ . '/nav.php';

?>

    <!--  Search bar  -->
    <div style="float: right; text-align: right">
        <form action="#">

        <h4>Component Search</h4>
        <input type="text" id="searchField" autocomplete="off" /><button>Search</button>
        <br />
        <div id="popups"> </div>
        </form>
    </div>

<div id="shown">
    <div>
        <a href="#" id="componentThat"><h2>Learn</h2></a>
        <p>Check out our videos on how to build your computer from scratch!</p>

    </div>
    <div>
        <a href="#" id="buildThis"><h2>Build</h2></a>
        <p>Choose your components for your future build!</p>
    </div>
</div>
<!--   Tutorials  -->
<div id="tut" hidden>

    <style>
        #tut{ width: 100%;}
        #dropInt{width: 100%}
        #draggable, #draggable2, #draggable3, #draggable4,
        #draggable5, #draggable6, #draggable7, #draggable8,
        #draggable9, #draggable10, #draggable11, #draggable12 { width: 10%; height: 80px; padding: 0.5em; display: inline-block; margin: 10px; overflow: auto;}

        #droppable, #droppable2, #droppable3, #droppable4,
        #droppable5, #droppable6, #droppable7, #droppable8,
        #droppable9, #droppable10, #droppable11, #droppable12{ width: 10%; height: 100px; padding: 0.5em; display: inline-block; margin: 10px; }

        #dragText{word-wrap: break-word;}

        #quizHnD{ width: 100%}
        #quizHnD h1{width: 11%; margin: auto; display: inline-block;}

        #quizHnD h3{width: 89%; margin:auto; display: inline-block;}

        #start1{
            height: 50%;
            text-decoration: none;
            color: aliceblue;
            border: 2px solid transparent;
            border-radius: 10px;
            padding: 10px 40px 10px 40px;
            background-color: #0077b3;
        }

        .ui-state-highlight{ background-color: #66ff66; border: 1px solid #777620;}
    </style>
    <script>

    </script>
    <div id="dropInt" >
        <div id="quizHnD">
            <h1>Quiz 1 </h1><h3>- easy drag and drop quiz</h3></div>
        <button id="start1">Start</button>
    </div>
        <div id="quiz1" hidden>
            <div><h3>Time Left <span id="time">5</span> seconds!</h3></div>

        <div id="draggable" class="ui-widget-content" data-id-group="cpuQuiz1">
            <p id="dragText">Processor</p>
        </div>

        <div id="draggable2" class="ui-widget-content" data-id-group="moboQuiz1">
            <p id="dragText">Motherboard</p>
        </div>

        <div id="draggable3" class="ui-widget-content" data-id-group="ssdQuiz1">
            <p id="dragText">SSD</p>
        </div>

        <div id="draggable4" class="ui-widget-content" data-id-group="gpuQuiz1">
            <p  id="dragText">Graphics<br>Card</p>
        </div>

        <div id="draggable5" class="ui-widget-content" data-id-group="hddQuiz1">
            <p  id="dragText">HDD</p>
        </div>

        <div id="draggable6" class="ui-widget-content" data-id-group="moniQuiz1">
            <p  id="dragText">Monitor</p>
        </div>

        <div id="draggable7" class="ui-widget-content" data-id-group="ramQuiz1">
            <p  id="dragText">RAM</p>
        </div>

        <div id="draggable8" class="ui-widget-content" data-id-group="miceQuiz1">
            <p  id="dragText">Mouse</p>
        </div>

        <div id="draggable9" class="ui-widget-content" data-id-group="psuQuiz1">
            <p  id="dragText">Power Supply</p>
        </div>

        <div id="draggable10" class="ui-widget-content" data-id-group="keyQuiz1">
            <p  id="dragText">Keyboard</p>
        </div>

        <div id="draggable11" class="ui-widget-content" data-id-group="caseQuiz1">
            <p  id="dragText">Case</p>
        </div>

        <div id="draggable12" class="ui-widget-content" data-id-group="coolingQuiz1">
            <p  id="dragText">Cooling</p>
        </div>

        <div id="droppable" class="ui-widget-header" data-id-group="gpuQuiz1">
            <p><img src="../images/gpu.png"></p>
        </div>

        <div id="droppable2" class="ui-widget-header" data-id-group="coolingQuiz1">
            <p><img src="../images/cooling.png"></p>
        </div>

        <div id="droppable3" class="ui-widget-header" data-id-group="keyQuiz1">
            <p><img src="../images/keyboard.png"></p>
        </div>

        <div id="droppable4" class="ui-widget-header" data-id-group="cpuQuiz1">
            <p><img src="../images/cpu.png"></p>
        </div>

        <div id="droppable5" class="ui-widget-header" data-id-group="psuQuiz1">
            <p><img src="../images/psu.png"></p>
        </div>

        <div id="droppable6" class="ui-widget-header" data-id-group="ssdQuiz1">
            <p><img src="../images/ssd.png"></p>
        </div>

        <div id="droppable7" class="ui-widget-header" data-id-group="moboQuiz1">
            <p><img src="../images/mobo.png"></p>
        </div>

        <div id="droppable8" class="ui-widget-header" data-id-group="caseQuiz1">
            <p><img src="../images/case.png"></p>
        </div>

        <div id="droppable9" class="ui-widget-header" data-id-group="moniQuiz1">
            <p><img src="../images/monitor.png"></p>
        </div>

        <div id="droppable10" class="ui-widget-header" data-id-group="miceQuiz1">
            <p><img src="../images/mouse.png"></p>
        </div>

        <div id="droppable11" class="ui-widget-header" data-id-group="hddQuiz1">
            <p><img src="../images/hdd.png"></p>
        </div>

        <div id="droppable12" class="ui-widget-header" data-id-group="ramQuiz1">
            <p><img src="../images/ram.png"></p>
        </div>
        </div>
    </div>

    <!--  Build it! -->
    <div id="buildIt" hidden>

        <script>

        </script>
        <h1>Build your SPC!</h1>
        <p style="text-align: center; background-color: white">Easy - Fast - Simple</p>
        <div id="allComp">
            <ul id="componentsBut">
                <li><button id="buttonPro" data-id-button-group="proc">Processors</button></li>
                <li><button id="buttonGpu" data-id-button-group="gpu">Graphics Cards</button></li>
                <li><button id="buttonMobo" data-id-button-group="mobo">Motherboards</button></li>
                <li><button id="buttonCool" data-id-button-group="cool">Cooling</button></li>
                <li><button id="buttonRam" data-id-button-group="ram">RAM</button></li>
                <li><button id="buttonPsu" data-id-button-group="psu">Power Supply</button></li>
                <li><button id="buttonSsd" data-id-button-group="ssd">SSDs</button></li>
                <li><button id="buttonHdd" data-id-button-group="hdd">HDDs</button></li>
                <li><button id="buttonCase" data-id-button-group="case">Cases</button></li>
                <li><button id="buttonMoni" data-id-button-group="moni">Monitor</button></li>
                <li><button id="buttonKey" data-id-button-group="key">Keyboards</button></li>
                <li><button id="buttonMice" data-id-button-group="mice">Mice</button></li>

            </ul>

            <div id="components" >
                <div id="processors" style="display: none" data-id-button-group="proc">
                    <ul id="sortable1" class="connectedSortable">
                        <li class="ui-state-default ui-state-disabled" style="background-color: black; color: white;">Processors</li>
                        <li class="ui-state-default"><p>Intel Core i7</p></li>
                        <li class="ui-state-default"><p>Intel Core i5</p></li>
                        <li class="ui-state-default"><p>Intel Core i3</p></li>
                        <li class="ui-state-default"><p>AMD FX8350</p></li>
                        <li class="ui-state-default"><p>AMD FX6300</p></li>
                    </ul>
                </div>

                <div id="gpus" style="display: none" data-id-button-group="gpu">
                    <ul id="sortable2" class="connectedSortable">
                        <li class="ui-state-default ui-state-disabled" style="background-color: black; color: white;">Graphic Cards</li>
                        <li class="ui-state-default"><p>Nvidia Titan X</p></li>
                        <li class="ui-state-default"><p>EVGA GeForce GTX 1080</p></li>
                        <li class="ui-state-default"><p>Zotac GeForce GTX 980Ti</p></li>
                        <li class="ui-state-default"><p>Gigabyte Radeon R9 Fury X</p></li>
                        <li class="ui-state-default"><p>Sapphire Radeon R9 Nano</p></li>
                    </ul>
                </div>

                <div id="motherboards" style="display: none" data-id-button-group="mobo">
                    <ul id="sortable3" class="connectedSortable">
                        <li class="ui-state-default ui-state-disabled" style="background-color: black; color: white;">Motherboards</li>
                        <li class="ui-state-default"><p>Asus Strix</p></li>
                        <li class="ui-state-default"><p>Gigabyte ROG</p></li>
                        <li class="ui-state-default"><p>Zotac GeForce GTX 980Ti</p></li>
                        <li class="ui-state-default"><p>Gigabyte Radeon R9 Fury X</p></li>
                        <li class="ui-state-default"><p>Sapphire Radeon R9 Nano</p></li>
                    </ul>
                </div>

                <div id="cooling" style="display: none" data-id-button-group="cool">
                    <ul id="sortable4" class="connectedSortable">
                        <li class="ui-state-default ui-state-disabled" style="background-color: black; color: white;">Cooling</li>
                        <li class="ui-state-default"><p>Cool Master</p></li>
                        <li class="ui-state-default"><p>Corsair</p></li>
                        <li class="ui-state-default"><p>Zotac GeForce GTX 980Ti</p></li>
                        <li class="ui-state-default"><p>Gigabyte Radeon R9 Fury X</p></li>
                        <li class="ui-state-default"><p>Sapphire Radeon R9 Nano</p></li>
                    </ul>
                </div>

                <div id="ram" style="display: none" data-id-button-group="ram">
                    <ul id="sortable5" class="connectedSortable">
                        <li class="ui-state-default ui-state-disabled" style="background-color: black; color: white;">RAM</li>
                        <li class="ui-state-default"><p>Kingston</p></li>
                        <li class="ui-state-default"><p>HyperX</p></li>
                        <li class="ui-state-default"><p>Zotac GeForce GTX 980Ti</p></li>
                        <li class="ui-state-default"><p>Gigabyte Radeon R9 Fury X</p></li>
                        <li class="ui-state-default"><p>Sapphire Radeon R9 Nano</p></li>
                    </ul>
                </div>

                <div id="psu" style="display: none" data-id-button-group="psu">
                    <ul id="sortable6" class="connectedSortable">
                        <li class="ui-state-default ui-state-disabled" style="background-color: black; color: white;">Power Supply</li>
                        <li class="ui-state-default"><p>Corsair</p></li>
                        <li class="ui-state-default"><p>EVGA</p></li>
                        <li class="ui-state-default"><p>Zotac GeForce GTX 980Ti</p></li>
                        <li class="ui-state-default"><p>Gigabyte Radeon R9 Fury X</p></li>
                        <li class="ui-state-default"><p>Sapphire Radeon R9 Nano</p></li>
                    </ul>
                </div>

                <div id="ssd" style="display: none" data-id-button-group="ssd">
                    <ul id="sortable7" class="connectedSortable">
                        <li class="ui-state-default ui-state-disabled" style="background-color: black; color: white;">SSDs</li>
                        <li class="ui-state-default"><p>Samsung</p></li>
                        <li class="ui-state-default"><p>EVGA GeForce GTX 1080</p></li>
                        <li class="ui-state-default"><p>Zotac GeForce GTX 980Ti</p></li>
                        <li class="ui-state-default"><p>Gigabyte Radeon R9 Fury X</p></li>
                        <li class="ui-state-default"><p>Sapphire Radeon R9 Nano</p></li>
                    </ul>
                </div>

                <div id="hdd" style="display: none" data-id-button-group="hdd">
                    <ul id="sortable8" class="connectedSortable">
                        <li class="ui-state-default ui-state-disabled" style="background-color: black; color: white;">HDDs</li>
                        <li class="ui-state-default"><p>Samsung</p></li>
                        <li class="ui-state-default"><p>Kingston</p></li>
                        <li class="ui-state-default"><p>Zotac GeForce GTX 980Ti</p></li>
                        <li class="ui-state-default"><p>Gigabyte Radeon R9 Fury X</p></li>
                        <li class="ui-state-default"><p>Sapphire Radeon R9 Nano</p></li>
                    </ul>
                </div>

                <div id="cases" style="display: none" data-id-button-group="case">
                    <ul id="sortable9" class="connectedSortable">
                        <li class="ui-state-default ui-state-disabled" style="background-color: black; color: white;">Cases</li>
                        <li class="ui-state-default"><p>Corsair</p></li>
                        <li class="ui-state-default"><p>Cool Master</p></li>
                        <li class="ui-state-default"><p>Zotac GeForce GTX 980Ti</p></li>
                        <li class="ui-state-default"><p>Gigabyte Radeon R9 Fury X</p></li>
                        <li class="ui-state-default"><p>Sapphire Radeon R9 Nano</p></li>
                    </ul>
                </div>

                <div id="monitors" style="display: none" data-id-button-group="moni">
                    <ul id="sortable10" class="connectedSortable">
                        <li class="ui-state-default ui-state-disabled" style="background-color: black; color: white;">Monitors</li>
                        <li class="ui-state-default"><p>Samsung</p></li>
                        <li class="ui-state-default"><p>LG</p></li>
                        <li class="ui-state-default"><p>Zotac GeForce GTX 980Ti</p></li>
                        <li class="ui-state-default"><p>Gigabyte Radeon R9 Fury X</p></li>
                        <li class="ui-state-default"><p>Sapphire Radeon R9 Nano</p></li>
                    </ul>
                </div>

                <div id="keyboards" style="display: none" data-id-button-group="key">
                    <ul id="sortable11" class="connectedSortable">
                        <li class="ui-state-default ui-state-disabled" style="background-color: black; color: white;">Keyboards</li>
                        <li class="ui-state-default"><p>Corsair</p></li>
                        <li class="ui-state-default"><p>Razor</p></li>
                        <li class="ui-state-default"><p>Zotac GeForce GTX 980Ti</p></li>
                        <li class="ui-state-default"><p>Gigabyte Radeon R9 Fury X</p></li>
                        <li class="ui-state-default"><p>Sapphire Radeon R9 Nano</p></li>
                    </ul>
                </div>

                <div id="mice" style="display: none" data-id-button-group="mice">
                    <ul id="sortable12" class="connectedSortable">
                        <li class="ui-state-default ui-state-disabled" style="background-color: black; color: white;">Mice</li>
                        <li class="ui-state-default"><p>Razor</p></li>
                        <li class="ui-state-default"><p>EVGA GeForce GTX 1080</p></li>
                        <li class="ui-state-default"><p>Zotac GeForce GTX 980Ti</p></li>
                        <li class="ui-state-default"><p>Gigabyte Radeon R9 Fury X</p></li>
                        <li class="ui-state-default"><p>Sapphire Radeon R9 Nano</p></li>
                    </ul>
                </div>
            </div>

            <div id="selectItems">
                <h1 id="dragText">Drag Here</h1>
                <ul id="sortable13" style="min-height: 50px" class="connectedSortable"></ul>
            </div>

            <div id="display">
                <button id="cont">Continue</button>
                <div id="toPdf">
                    <ul id="displayUl"></ul>
                </div>
                <div id="editor"></div>
            </div>
        </div>
    </div>

    <script>
            $( "#sortable1, #sortable2, #sortable3, #sortable4, #sortable5, #sortable6, #sortable7, #sortable8, #sortable9, #sortable10, #sortable11, #sortable12").sortable({
                connectWith: ".connectedSortable",
                placeholder: "ui-state-highlight",
                items: "li:not(.ui-state-disabled)",
                remove: function(event, ui) {
                    ui.item.clone().append( "<button class='cancelBut'>Remove</button>" ).appendTo('#sortable13');
                    $(this).sortable('cancel');
                }
            }).disableSelection();


            $( "#sortable13").sortable({
                connectWith: ".connectedSortable",
                items: "li:not(.ui-state-disabled)",
                cancel: "li"
            }).disableSelection();


            $( "#buttonPro, #buttonGpu, #buttonMobo, #buttonCool," +
                "#buttonRam, #buttonPsu, #buttonSsd, #buttonHdd," +
                "#buttonCase, #buttonMoni, #buttonKey, #buttonMice" ).click(function() {

                var id= $(this).attr("data-id-button-group");
                $("#allComp").find("div[data-id-button-group="+ id +"]").toggle().siblings().hide();

            });

            $(document).on('click', '.cancelBut', function() {
                $(this).parent().remove();
            });


//        $(document).on('click', '#cont', function() {
//            $(this).parent().remove();
//        });

            $( "#cont" ).click(function() {
                $( "#sortable13" ).contents().clone().appendTo("#display ul").find(".cancelBut").remove();
                $( "<button id='pdfD'>Save To PDF</button>" ).appendTo('#display');
                $("#components, #componentsBut, #selectItems, #cont").hide(500);
                $("#display").css({"text-align":"center", "width":"60%", "margin-left":"auto auto 10px auto"});

            });

            var doc = new jsPDF();
            var specialElementHandlers = {
                '#editor': function (element, renderer) {
                    return true;
                }
            };

            $(document).on('click', '#pdfD', function () {
                doc.fromHTML($('#toPdf').html(), 15, 15, {
                    'width': 170,
                    'elementHandlers': specialElementHandlers
                });
                doc.save('sample-file.pdf');
                //$("#sortable1").css("background-color", "red");
            });


            var counter = 0;
            var timeCount;

            var allDragComp = $("#draggable, #draggable2, #draggable3, #draggable4, " +
                "#draggable5, #draggable6, #draggable7, #draggable8,"+
                "#draggable9, #draggable10, #draggable11, #draggable12" );

            allDragComp.draggable({ revert: "invalid" });


            var allDropComp = $("#droppable, #droppable2, #droppable3, #droppable4, " +
                "#droppable5, #droppable6, #droppable7, #droppable8,"+
                "#droppable9, #droppable10, #droppable11, #droppable12" );

            function startTimer(duration, display) {
                var timer = duration, minutes, seconds;
                timeCount = setInterval(function () {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;

                    display.textContent = seconds;

                    if (--timer < 0){
                        //timer = 0;
                        alert("Quiz Failed.\nScore: "+ counter +"/12\nTry Again.");
                        counter = 0;
                        $("#quiz1").hide(500);
                        $("#start1").show();
                        clearInterval(timeCount);
                        display.textContent = "5";
                        allDragComp.css({"left": "0", "top": "0"});
                        allDropComp.removeClass("ui-state-highlight");
                    }
                }, 1000);
            }

            allDropComp.droppable({
                accept:  function (draggable) {
                    var id_group_drop, id_group_drag;

                    //get the "id_group" stored in a data-attribute of the draggable
                    id_group_drag = $(draggable).attr("data-id-group");

                    //get the "id_group" stored in a data-attribute of the droppable
                    id_group_drop = $(this).attr("data-id-group");

                    //compare the id_groups, return true if they match or false otherwise
                    return id_group_drop == id_group_drag;
                },
                drop: function( event, ui ) {
                    $(this)
                        .addClass("ui-state-highlight");
                    counter++;
                    if(counter == 12){
                        clearInterval(timeCount);
                        alert("Success!\nScore: "+counter+"/12");
                        //$("#droppable").draggable({revert:true});
                        counter = 0;
                        $("#quiz1").hide();
                        $("#start1").show();
                        allDragComp.css({"left": "0", "top": "0"});
                        allDropComp.removeClass("ui-state-highlight");
                    }
                }
            });


        $( "#start1" ).click(function() {
            $("#quiz1").show(500);
            $("#start1").hide();
            var fiveMinutes = 5,
                display = document.querySelector('#time');
            startTimer(fiveMinutes, display);
        });

        $("#componentThat").click(function(){
            $("#buildIt").hide(500);
            $("#tut").show(500);
        });

        $("#buildThis").click(function(){
            $("#tut").hide(500);
            $("#buildIt").show(500);
        });
    </script>
<?php require_once __DIR__ . '/footer.php'; ?>