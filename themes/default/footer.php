        <footer class="text-center" style="margin-top: 160px; margin-bottom: 20px">
            <p class="copyright"><?php echo $this->config['copyright']; ?></p>
        </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script type="text/javascript">
        if ($.cookie('time')) {
            <?php if (!is_login()) { ?>
                if ($.cookie('time') == 'forever') {
                    $.cookie('time', '1');
                }
            <?php } ?>
            $("#time").val($.cookie('time'));
        }
        $("#time").change(function() {
            var time = $(this).val();
            $.cookie('time', time);
            <?php if (!is_login()) { ?>
                if (time == 'forever') {
                    alert('需要登陆后才可以能选择');
                    $(this).val("7d");
                    return;
                }
            <?php } ?>

        });

        function copyText(text) {
            if (text.indexOf('-') !== -1) {
                let arr = text.split('-');
                text = arr[0] + arr[1];
            }
            var textArea = document.createElement("textarea");
            textArea.style.position = 'fixed';
            textArea.style.top = '0';
            textArea.style.left = '0';
            textArea.style.width = '2em';
            textArea.style.height = '2em';
            textArea.style.padding = '0';
            textArea.style.border = 'none';
            textArea.style.outline = 'none';
            textArea.style.boxShadow = 'none';
            textArea.style.background = 'transparent';
            textArea.value = text;
            document.body.appendChild(textArea);
            textArea.select();

            try {
                var successful = document.execCommand('copy');
                var msg = successful ? '成功复制到剪贴板' : '该浏览器不支持点击复制到剪贴板';
                alert(msg);
            } catch (err) {
                alert('该浏览器不支持点击复制到剪贴板');
            }

            document.body.removeChild(textArea);
        }
    </script>
</html>