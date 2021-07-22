</div>
</div>
</div>
</div>
</div>



<script src="vendor/jquery-3.3.1.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

<script>
    let option = {
        animation:true,
        delay:10000
    }
    let toastElList = [].slice.call(document.querySelectorAll('.toast'))
    let toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl, option).show();
    })
</script>
</body>
</html>