


</div>
</div>
</section>
<script src="<?php echo $url; ?>/assets/vendor/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="<?php echo $url; ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/data_table/jquery.dataTables.min.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/data_table/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script src="<?php echo $url; ?>/assets/js/app.js"></script>
<script>
    let currentPage = location.href;
    $(".menu-item-link").each(function () {
        let links = $(this).attr("href");
        if(currentPage == links){
            $(this).addClass('active');
        }
    });
</script>

</body>
</html>