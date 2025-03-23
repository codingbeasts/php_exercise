<? require_once "../view/ex_header.php" ?>
<div>
    <a href="/">Back to homepage</a>
    <h1>PHP String manipulation Problems</h1>
    <form action="" method="POST" id="string_form">
        <?
        $labelValue = [
            'String Length' => "str_len",
            'Word Count' => "wrd_cnt",
            'Find Substring Position' => "sub_str_pos",
            'String to Uppercase' => "str_upp",
            'Substring Extraction' => "sub_str_extr",
            'Replace Word' => "rep_wrd",
            'Reverse String' => "rev_wrd",
            'HTML Entity Conversion' => "html_cnv",
            'Split and Join Strings' => "split_join",
            'Count Specific Character Occurrence' => "sub_str_cnt"
        ];
        $count = 1;
        foreach ($labelValue as $key => $value) {
            echo "<div class=\"form-check\"><input type=\"radio\" name=\"mCh\" id=\"str_$count\" class=\"form-check-input\"
                value=\"$value\"><label for=\"str_$count\" class=\"form-check-label\">$key</label></div>";
            $count++;
        }
        ?>
        <button id="sbt_btn" class="btn-primary btn mt-2">Select Option</button>
    </form>
    <form action="" id="response" method="GET" class="mt-4 d-flex flex-column align-items-start">
        <button id="prfm_op" class="btn btn-secondary mt-2">Evalulate</button>
    </form>
    <div id="string_output" class="mt-4"></div>
</div>
<script>
    let optionCount = 1;
    let formCh;
    function ajaxCall(reqMethod, fileName, req_tag, res_tag, eval_method) {
        const formData = new FormData(req_tag);
        const xhr = new XMLHttpRequest();
        if (reqMethod === 'POST') {
            xhr.open(reqMethod, fileName, true);
        } else {
            const formParams = new URLSearchParams();
            formData.forEach((value, key) => {
                formParams.append(key, value);
            });
            xhr.open(reqMethod, `${fileName}?formType=${formCh}&${formParams.toString()}`, true);
        }
        xhr.onload = function () {
            if (xhr.status === 200) {
                const jsonData = JSON.parse(xhr.responseText);
                res_tag.insertAdjacentElement('beforeend', eval_method(jsonData));
            } else {
                res_tag.innerText = `Error: ${xhr.status} - ${xhr.statusText}`;
            }
        }
        // Handle network errors
        xhr.onerror = function () {
            res_tag.innerText = 'A network error occurred. Please try again.';
        };
        // Handle timeouts
        xhr.ontimeout = function () {
            res_tag.innerText = 'The request timed out. Please try again.';
        };
        // Set a timeout (optional)
        xhr.timeout = 10000; // Timeout in milliseconds (10 seconds)
        reqMethod === 'POST' ? xhr.send(formData) : xhr.send();
    }
    document.getElementById("sbt_btn").addEventListener('click', function (e) {
        e.preventDefault();
        optionCount++;
        if (optionCount > 2) {
            const el = document.getElementById('response');
            let child = el.firstChild;
            while (child) {
                const nextChild = child.nextSibling; // Store the next sibling before removal
                if (child.tagName !== 'BUTTON') {
                    el.removeChild(child);
                }
                child = nextChild; // Move to the next child
            }
            ajaxCall('POST', 'string_manipulation.php', document.getElementById("string_form"), document.getElementById("response"), str_manu_method)
        }
        else {
            ajaxCall('POST', 'string_manipulation.php', document.getElementById("string_form"), document.getElementById("response"), str_manu_method)
        }
    });
    document.getElementById('prfm_op').addEventListener('click', function (e) {
        e.preventDefault();
        ajaxCall('GET', 'string_eval.php', document.getElementById("response"), document.getElementById("string_output"), opt_string);
    });
    function str_manu_method(param) {
        formCh = param.res;
        const div = document.getElementById('prfm_op');
        if (param.nInput === 1 && param.nInput != 0) {
            const label = document.createElement('label');
            label.setAttribute('class', param.label);
            label.innerText = param.label;
            const input = document.createElement('input');
            input.setAttribute("class", "form-control");
            input.setAttribute("type", param.type);
            input.setAttribute("name", param.props);
            div.insertAdjacentElement('beforebegin', label);
            div.insertAdjacentElement('beforebegin', input);
        }
        else if (param.nInput > 1) {
            param.props.forEach((element, index) => {
                const label = document.createElement('label');
                label.setAttribute('class', param.label[index]);
                label.innerText = param.label[index];
                const input = document.createElement('input');
                input.setAttribute("class", "form-control");
                input.setAttribute("type", param.type);
                input.setAttribute("name", element);
                div.insertAdjacentElement('beforebegin', label);
                div.insertAdjacentElement('beforebegin', input);
            });
        }
        else {
            console.log(Error);
        }
        return div;
    }
    function opt_string(param) {
        const div = document.createElement('div');
        div.innerText = "OutPut : "+param.outPut;
        return div;
    }
</script>
<? require_once "../view/ex_footer.php" ?>