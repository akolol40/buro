<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="js/script.js"></script>
    <title>Buro</title>
</head>
<body class="body">

</body>
    <section class="block-header">
        <div class="block-header text">
            <p>Junior</p> 
            <div class="line_text">|</div>
            <p>Middle</p>
            <div class="line_text">|</div>
            <p>Senior</p>
        </div>
    </section>
    <section class="block-main">
        <div class="header">
            <h1>Тестовое задание для Junior веб-разработчика</h1>
            <div class="position_p">
                <p>Перед началом выполнения тестового задания, пожалуйста, убедитесь, что данная вакансия открыта.</p>
                <p>Ознакомиться со списком актуальных вакансий можно по ссылке: https://</p>
            </div>
        </div>
        <div class="block-text">
            <p>Компания IT-Buro специализируется на создании и развитии современных интернет-проектов, сервисов и решений на платформе "1С-Битрикс". Мы прекрасно осознаем преимущества и недостатки платформы, но высокое качество наших услуг и соответствующий высокий спрос, позволяет  нам более 10 лет прекрасно себя чувствовать на рынке IT-услуг, работая только на 1С-Битрикс. </p>
            
            <p>У нас дружная команда и прекрасный офис в стиле лофт в одном из самых красивых зданий Воронежа. Для всех сотрудников созданы комфортные условия труда: работаем исключительно на технике Apple, ведущие программисты имеют в своем распоряжении iMac Retina и AirPods, а освещением и кондиционером в офисе управляет Яндекс.Алиса =)</p>
        </div>
        <div class="block-footer">
            <img src="/img/BX-logo.png" alt="Loading..." width="50px" height="50px">
            <div class="block-footer-text">
                <p>Внимание: в данном задании нет коммерческой составляющей, оно рассчитано исключительно на проверку Ваших базовых знаний (HTML+CSS). На практике заниматься версткой Вам не придется, но для успешного развития в должности backend-разработчика, frontend надо знать на базовом уровне и понимать как он устроен.</p>
            </div>
        </div>
    </section>
    <section class="footer">
            <div class="block-line">

            </div>
            <div class="footer-text">
                <p>&copy 2009-2020 IT-Buro</p>
            </div>
    </section>
    <?php
        require 'php/ArrayWorker.php';
        $test = new ArrayWorker();
        $test->dump();
    ?>
</html>