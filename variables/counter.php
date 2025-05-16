<?php require_once '../view/ex_header.php' ?>
<div class="">
    <div class="form-group"><label for="" class="form-label">Enter Counter Value</label>
        <input type="text" id="countVal" name="" class="form-control mt-3">
    </div>
    <input id="btnCount" type="button" class="btn btn-outline-success mt-3" value="Submit Value">
    <div class="counterDiv">
        <span class="fs-1"><span class="text-danger count"></span> +</span>
    </div>
    <input class="btn btn-outline-primary" id="startCounter" type="button" value="Update Count">
</div>
<script>
    function byId(el) {
        return document.getElementById(el);
    }
    const btnCount = byId('btnCount');
    const startCount = byId('startCounter');
    const countVal = byId('countVal');
    const countEl = document.querySelector('.count');
    let countTo, i;

    function init() {
        countEl.innerHTML = countVal.value;
        countTo = parseInt(countEl.innerText);
        i = 0;
    }
    btnCount.addEventListener('click', getCounter);

    function getCounter() {
        init();
        if (countTo <= 0 || countTo === '' || isNaN(countTo) || typeof countTo === 'undefined') {
            countEl.innerHTML = 0;
            startCount.classList.add('text-danger', 'btn-outline-danger');
            startCount.disabled = true;
        } else {
            startCount.classList.remove('text-danger', 'btn-outline-danger');
            startCount.disabled = false;
        }
    }
    startCount.addEventListener('click', startInterval);

    function startInterval() {
        let interval = setInterval(() => {
            updateCount(interval);
        }, 50);
    }

    function updateCount(interval) {
        i++;
        i <= countTo ? countEl.innerText = i : clearInterval(interval);
    }
</script>
<?php require_once '../view/ex_footer.php' ?>