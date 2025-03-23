<?php require_once '../view/ex_header.php' ?>
<div class="">
    <div class="counterDiv">
        <span class="fs-1"><span class="text-danger count">100</span> +</span>
    </div>
    <input class="btn btn-outline-secondary text-black" id="startCounter" type="button" value="Update Count">
</div>
<script>
    const countEl = document.querySelector('.count');
    const countTo = countEl.innerText;
    countEl.innerHTML = 0;
    let i = 0;
    document.getElementById('startCounter').addEventListener('click', function () {
        let interval = setInterval(() => {
            updateCount(interval);
        }, 50);
    });
    function updateCount(interval) {
        i++;
        i <= countTo ? countEl.innerText = i : clearInterval(interval);
    }
</script>
<?php require_once '../view/ex_footer.php' ?>