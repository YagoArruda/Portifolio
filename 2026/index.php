<?php
$name = "Yago Arruda";
$role = "Desenvolvedor";

$skills = [
    "Frontend" => ["HTML", "CSS", "JavaScript", "React"],
    "Backend" => ["PHP", "Node.js", "C#"],
    "Banco de Dados" => ["MySQL"],
    "Ferramentas" => ["Git", "GitHub", "AWS"]
];

$projects = [
    [
        "number" => "Destaque: 01",
        "title" => "Chatbot de Atendimento",
        "description" => "Um chatbot desenvolvido para fornecer suporte inicial e informações aos usuários, além de já coletar informações essenciais antes de redirecionar o atendimento a um humano nos casos necessários.",
        "technologies" => ["Node.js", "JavaScript"]
    ],
    [
        "number" => "Destaque: 02",
        "title" => "Sistema de Agendamento e Gestão",
        "description" => "Aplicação desenvolvida para gerenciamento de reservas, usuários e informações, utilizando uma arquitetura baseada em frontend, backend e banco de dados, para o contexto de uma empresa pequena/média.",
        "technologies" => ["HTML", "CSS", "JavaScript", "React", "Node.js", "MySQL"]
    ],
    [
        "number" => "Destaque: 03",
        "title" => "Deepbound",
        "description" => "Um pequeno jogo indie que possui diversas funcionalidades e sistemas, desenvolvido de forma independente e foi utilizado para aplicação pratica de diversos conceitos estudados.",
        "technologies" => ["C#"]
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="Portfólio profissional de Yago Arruda, desenvolvedor especializado em desenvolvimento de aplicações web, APIs e sistemas integrados a bancos de dados."
    >

    <meta
        name="keywords"
        content="Yago Arruda, Desenvolvedor, Desenvolvedor PHP, Desenvolvedor Web, Sistemas de Informação, PHP, JavaScript, Node.js, MySQL"
    >

    <meta name="author" content="Yago Arruda">

    <title>
        <?= htmlspecialchars($name) ?> | <?= htmlspecialchars($role) ?>
    </title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #0b0d12;
            color: #e8eaf0;

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            line-height: 1.6;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        /* =========================
           NAVBAR
        ========================= */

        nav {
            position: fixed;

            top: 0;
            left: 0;

            width: 100%;

            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 20px 8%;

            background: rgba(11, 13, 18, 0.85);

            backdrop-filter: blur(10px);

            border-bottom: 1px solid #222733;

            z-index: 100;
        }

        .logo {
            font-family: monospace;

            font-size: 1.2rem;

            font-weight: bold;

            color: #ffffff;
        }

        .nav-links {
            display: flex;

            gap: 25px;

            color: #aeb4c2;
        }

        .nav-links a:hover {
            color: #ffffff;
        }


        /* =========================
           CONTAINER
        ========================= */

        .container {
            width: min(1100px, 90%);

            margin: auto;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 100vh;

            display: flex;

            align-items: center;
        }

        .hero-content {
            max-width: 800px;
        }

        .system-label {
            font-family: monospace;

            font-size: 0.8rem;

            color: #6d7483;

            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: clamp(
                3rem,
                8vw,
                6rem
            );

            line-height: 1;

            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #7c8cff;
        }

        .hero p {
            max-width: 650px;

            font-size: 1.2rem;

            color: #aeb4c2;

            margin-bottom: 35px;
        }


        /* =========================
           BUTTONS
        ========================= */

        .buttons {
            display: flex;

            gap: 15px;

            flex-wrap: wrap;
        }

        .button {
            padding:
                12px
                22px;

            border-radius: 6px;

            border:
                1px solid
                #30394d;

            transition:
                0.2s;
        }

        .button.primary {
            background: #7c8cff;

            color: #0b0d12;

            font-weight: bold;
        }

        .button:hover {
            transform:
                translateY(-2px);
        }


        /* =========================
           SECTIONS
        ========================= */

        section {
            padding:
                110px 0;
        }

        .section-title {
            font-size: 2rem;

            margin-bottom: 15px;
        }

        .section-label {
            font-family: monospace;

            font-size: 0.75rem;

            color: #7c8cff;

            margin-bottom: 10px;
        }

        .section-description {
            max-width: 750px;

            color: #aeb4c2;
        }


        /* =========================
           PROFILE
        ========================= */

        .profile-grid {
            display: grid;

            grid-template-columns:
                1fr
                1fr;

            gap: 40px;

            margin-top: 50px;
        }

        .profile-card {
            background: #11141b;

            border:
                1px solid
                #222733;

            padding: 25px;

            border-radius: 8px;
        }

        .profile-card h3 {
            margin-bottom: 15px;

            font-family: monospace;

            color: #7c8cff;
        }

        .profile-item {
            display: flex;

            justify-content: space-between;

            padding:
                12px 0;

            border-bottom:
                1px solid
                #222733;

            color: #aeb4c2;
        }


        /* =========================
           SKILLS
        ========================= */

        .skills-grid {
            display: grid;

            grid-template-columns:
                repeat(
                    auto-fit,
                    minmax(200px, 1fr)
                );

            gap: 20px;

            margin-top: 50px;
        }

        .skill-card {
            background: #11141b;

            border:
                1px solid
                #222733;

            padding: 25px;

            border-radius: 8px;
        }

        .skill-card h3 {
            font-family: monospace;

            margin-bottom: 20px;

            color: #7c8cff;
        }

        .skills-list {
            display: flex;

            flex-wrap: wrap;

            gap: 8px;
        }

        .skill {
            padding:
                6px
                10px;

            background: #181c25;

            border-radius: 4px;

            font-size: 0.85rem;

            color: #aeb4c2;
        }


        /* =========================
           PROJECTS
        ========================= */

        .projects {
            display: grid;

            gap: 20px;

            margin-top: 50px;
        }

        .project-card {
            background: #11141b;

            border:
                1px solid
                #222733;

            padding: 30px;

            border-radius: 8px;

            transition:
                0.2s;
        }

        .project-card:hover {
            border-color: #7c8cff;

            transform:
                translateY(-3px);
        }

        .project-number {
            font-family: monospace;

            color: #7c8cff;

            font-size: 0.8rem;

            margin-bottom: 10px;
        }

        .project-card h3 {
            font-size: 1.4rem;

            margin-bottom: 10px;
        }

        .project-card p {
            color: #aeb4c2;

            margin-bottom: 20px;
        }

        .technologies {
            display: flex;

            flex-wrap: wrap;

            gap: 8px;
        }

        .technology {
            font-family: monospace;

            font-size: 0.75rem;

            color: #7c8cff;
        }


        /* =========================
           EXPERIENCE
        ========================= */

        .timeline {
            margin-top: 50px;

            border-left:
                1px solid
                #30394d;

            padding-left: 30px;
        }

        .timeline-item {
            position: relative;

            margin-bottom: 45px;
        }

        .timeline-item::before {
            content: "";

            position: absolute;

            left: -36px;

            top: 8px;

            width: 10px;

            height: 10px;

            background: #7c8cff;

            border-radius: 50%;
        }

        .timeline-date {
            font-family: monospace;

            color: #7c8cff;

            font-size: 0.8rem;
        }

        .timeline-item h3 {
            margin-top: 8px;
        }

        .timeline-item p {
            color: #aeb4c2;

            margin-top: 10px;
        }


        /* =========================
           CONTACT
        ========================= */

        .contact-box {
            background: #11141b;

            border:
                1px solid
                #222733;

            padding: 40px;

            border-radius: 8px;

            margin-top: 40px;
        }

        .contact-links {
            display: flex;

            gap: 20px;

            flex-wrap: wrap;

            margin-top: 25px;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            border-top:
                1px solid
                #222733;

            padding:
                30px 0;

            color: #6d7483;

            font-family: monospace;

            font-size: 0.8rem;
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 700px) {

            nav {
                padding:
                    20px 5%;
            }

            .nav-links {
                display: none;
            }

            .profile-grid {
                grid-template-columns:
                    1fr;
            }

            .hero h1 {
                font-size:
                    3.5rem;
            }

        }

    </style>
</head>

<script async src="https://www.googletagmanager.com/gtm.js?id=GTM-KLTSMZB2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
</script>

<body>


<!-- =========================
     NAVIGATION
========================= -->

<nav>

    <div class="logo">
        YAGO A.S
    </div>

    <div class="nav-links">

        <a href="#about">
            Sobre
        </a>

        <a href="#skills">
            Skills
        </a>

        <a href="#projects">
            Projetos
        </a>

        <a href="#experience">
            Experiência
        </a>

        <a href="#contact">
            Contato
        </a>

    </div>

</nav>


<!-- =========================
     HERO
========================= -->

<main>

<section class="hero">

    <div class="container">

        <div class="hero-content">

            <div class="system-label">
                // DEVELOPER PROFILE
            </div>

            <h1>

                Yago<br>

                <span>
                    Arruda
                </span>

            </h1>

            <p>

                Desenvolvedor focado
                na criação de aplicações web,
                sistemas, APIs e soluções
                conectadas a bancos de dados.

            </p>

            <div class="buttons">

                <a
                    href="#projects"
                    class="button primary"
                >
                    Ver Projetos
                </a>

                <a
                    href="#contact"
                    class="button"
                >
                    Entrar em Contato
                </a>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     ABOUT
========================= -->

<section id="about">

    <div class="container">

        <div class="section-label">
            // 01
        </div>

        <h2 class="section-title">
            Sobre mim
        </h2>

        <p class="section-description">

            Sou estudante de Sistemas de Informação
            e desenvolvedor com experiência no
            desenvolvimento de aplicações web,
            sistemas, APIs e integração com
            bancos de dados.

            <br><br>

            Meu foco está na construção de soluções
            completas, conectando interfaces,
            regras de negócio, backend e bancos
            de dados.

        </p>


        <div class="profile-grid">

            <div class="profile-card">

                <h3>
                    Perfil
                </h3>

                <div class="profile-item">

                    <span>
                        Função
                    </span>

                    <span>
                        Desenvolvedor
                    </span>

                </div>

                <div class="profile-item">

                    <span>
                        Foco
                    </span>

                    <span>
                        Sistemas Web
                    </span>

                </div>

                <div class="profile-item">

                    <span>
                        País
                    </span>

                    <span>
                        Brasil
                    </span>

                </div>

            </div>


            <div class="profile-card">

                <h3>
                    Foco Principal
                </h3>

                <p>

                    Desenvolvimento de aplicações
                    completas utilizando tecnologias
                    modernas para frontend, backend
                    e banco de dados.

                </p>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     SKILLS
========================= -->

<section id="skills">

    <div class="container">

        <div class="section-label">
            // 02
        </div>

        <h2 class="section-title">
            Tecnologias
        </h2>

        <p class="section-description">

            Tecnologias e ferramentas utilizadas
            no desenvolvimento de aplicações
            e sistemas.

        </p>


        <div class="skills-grid">

            <?php foreach ($skills as $category => $items): ?>

                <div class="skill-card">

                    <h3>
                        <?= htmlspecialchars($category) ?>
                    </h3>

                    <div class="skills-list">

                        <?php foreach ($items as $skill): ?>

                            <span class="skill">

                                <?= htmlspecialchars($skill) ?>

                            </span>

                        <?php endforeach; ?>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================
     PROJECTS
========================= -->

<section id="projects">

    <div class="container">

        <div class="section-label">
            // 03
        </div>

        <h2 class="section-title">
            Projetos
        </h2>

        <p class="section-description">

            Alguns projetos desenvolvidos
            envolvendo sistemas web,
            APIs e bancos de dados.

        </p>


        <div class="projects">

            <?php foreach ($projects as $project): ?>

                <article class="project-card">

                    <div class="project-number">

                        <?= htmlspecialchars(
                            $project["number"]
                        ) ?>

                    </div>

                    <h3>

                        <?= htmlspecialchars(
                            $project["title"]
                        ) ?>

                    </h3>

                    <p>

                        <?= htmlspecialchars(
                            $project["description"]
                        ) ?>

                    </p>


                    <div class="technologies">

                        <?php foreach (
                            $project["technologies"]
                            as
                            $technology
                        ): ?>

                            <span class="technology">

                                #
                                <?= htmlspecialchars(
                                    $technology
                                ) ?>

                            </span>

                        <?php endforeach; ?>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================
     EXPERIENCE
========================= -->

<section id="experience">

    <div class="container">

        <div class="section-label">
            // 04
        </div>

        <h2 class="section-title">
            Experiência
        </h2>


        <div class="timeline">

            <div class="timeline-item">

                <div class="timeline-date">

                    05/2025 — ATUAL

                </div>

                <h3>
                    Desenvolvimento de Sistemas
                </h3>

                <p>
                    Manutenção e desenvolvimento de sistemas digitais atuando em backend (PHP, Node.js), frontend (Nuxt.js) e aplicações mobile (Flutter)
                </p>

                <p>
                    Criação e manutenção de APIs e rotinas de sistema
                </p>

                <p>
                    Correção de bugs, implementação de melhorias e atualização de funcionalidades existentes
                </p>

                <p>
                    Manipulação e manutenção de banco de dados MySQL
                </p>

                <p>
                    Utilização de Git/GitHub para versionamento de código
                </p>

                <p>
                    Uso de Jira em ambiente com metodologias ágeis (dailys e planejamento de sprints)
                </p>

                <p>
                    Participação ativa em reuniões de planejamento e acompanhamento de tarefas
                </p>

                <p>
                    Interação com clientes internos e externos para levantamento e atendimento de demandas
                </p>

                <p>
                    Atendimento de solicitações de correções e melhorias reportadas por clientes
                </p>

                <p>
                    Atuação em múltiplos projetos
                </p>

                <p>
                    Execução de testes manuais para validação das aplicações
                </p>

            </div>


            <div class="timeline-item">

                <div class="timeline-date">

                    12/2024 — 05/2025

                </div>

                <h3>
                    Estagiário de Telecomunicação (Engenharia)
                </h3>

                <p>
                    - Configuração e manutenção da rede lógica em equipamentos Cisco, Juniper, Huawei, Datacom e Fiberhome. 
                </p>

                <p>
                    - Ativação de circuitos de dados.
                </p>

                <p>
                    - Desenho de topologias de rede
                </p>

            </div>

            <div class="timeline-item">

                <div class="timeline-date">

                    11/2023 — 12/2024
                </div>

                <h3>
                    Estagiário de Telecomunicação (Projetos)
                </h3>

                <p>
                    - Atuação na criação, manutenção e planejamento do mapa da rede física de fibra ótica,
                </p>

                <p>
                    - Elaboração de relatórios e análises técnicas, para clientes e Cemig
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     EDUCATION
========================= -->

<section>

    <div class="container">

        <div class="section-label">
            // 05
        </div>

        <h2 class="section-title">
            Formação
        </h2>


        <div class="profile-card">

            <h3>
                Sistemas de Informação
            </h3>

            <p>

                Graduação em Sistemas de Informação, com previsão de formatura no segundo semestre de 2026. (Atualmente cursando o 8º período)

            </p>

        </div>

    </div>

</section>


<!-- =========================
     CONTACT
========================= -->

<section id="contact">

    <div class="container">

        <div class="section-label">
            // 06
        </div>

        <h2 class="section-title">
            Vamos conversar.
        </h2>


        <div class="contact-box">

            <p>

                Interessado em trabalhar comigo
                ou conversar sobre desenvolvimento
                e tecnologia?

            </p>


            <div class="contact-links">

                <a
                    href="https://www.linkedin.com/in/yago-sim%C3%B5es-095998288/"
                    class="button primary"
                >
                    LinkedIn
                </a>

                <a
                    href="https://github.com/YagoArruda"
                    class="button"
                >
                    GitHub
                </a>

                <a
                    href="mailto:yago.a.simoes@gmail.com"
                    class="button"
                >
                    Email
                </a>

            </div>

        </div>

    </div>

</section>

</main>


<!-- =========================
     FOOTER
========================= -->

<footer>

    <div class="container">

        ©
        <?= date("Y") ?>

        Yago Arruda.

        // DEVELOPER PROFILE

    </div>

</footer>


</body>

</html>