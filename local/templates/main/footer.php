</main>
<?php
if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/local/templates/main/include/templ/footer.php")) {
    require_once($_SERVER['DOCUMENT_ROOT'] . "/local/templates/main/include/templ/footer.php");
} ?>
		</div>
		<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>"></script>
	</body>
</html>