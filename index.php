<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ana Julia Velasque</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Italiana&family=Unbounded:wght@500;700;900&family=Nunito+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
<style>
  :root {
  --tangerine: #F08C21;
  --butter: #E6E4DD;
  --blush: #d94e72;
  --sea: #1a047c;
  --sea-escuro: #3c51c4;
  --sea-claro: #3e8cde;
  --matcha: #B4B534;
  --yellow: #F2D88F;

  --cor-texto: #1c2a3a;
  --cor-texto-suave: #5a6b7d;
}

* { box-sizing: border-box; }
html, body { margin: 0; }

::selection {
  background: var(--yellow);
  color: var(--cor-texto);
}

body {
  min-height: 100vh;
  font-family: 'Nunito Sans', sans-serif;
  color: var(--cor-texto);
  background: var(--butter);
  padding: 4vh 5vw 6vh;
}

.wrap { max-width: 1180px; margin: 0 auto; }

/* -------- topo -------- */
.topo {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 1rem;
  margin-bottom: 3vh;
}

.lang-toggle {
  position: fixed;
  top: 10px;
  right: 10px;
}

/* -------- avatar -------- */
.avatar {
  width: 84px;
  height: 84px;
  border-radius: 50%;
  background: var(--sea-claro);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Unbounded', sans-serif;
  font-weight: 900;
  font-size: 1.6rem;
  border: 4px solid var(--tangerine);
  box-shadow: 0 8px 20px rgba(0,0,0,0.18);
  overflow: hidden;
}

.avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.marca h1 {
  font-family: 'Italiana', serif;
  font-weight: 500;
  font-size: clamp(2.6rem, 6.5vw, 4.4rem);
  margin: 0;
  letter-spacing: 0.01em;
  background: linear-gradient(100deg, var(--sea) 0%, var(--sea) 50%, var(--sea) 100%);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.marca p {
  margin: 0.3rem 0 0;
  font-size: 0.95rem;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  font-weight: 800;
  color: var(--blush);
}

/* -------- status ao vivo -------- */
.status {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  margin-top: 0.4rem;
  font-size: 0.85rem;
  font-weight: 700;
  color: var(--cor-texto);
}

.dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: #3fb950;
  animation: pulso 2s infinite;
}

@keyframes pulso {
  0%   { box-shadow: 0 0 0 0 rgba(63,185,80,0.55); }
  70%  { box-shadow: 0 0 0 9px rgba(63,185,80,0); }
  100% { box-shadow: 0 0 0 0 rgba(63,185,80,0); }
}

.lang-toggle {
  display: flex;
  gap: 6px;
  background: rgba(255,255,255,0.85);
  border-radius: 999px;
  padding: 4px;
  box-shadow: 0 4px 14px rgba(0,0,0,0.15);
}

.lang-toggle button {
  border: none;
  background: transparent;
  font-family: 'Nunito Sans', sans-serif;
  font-weight: 700;
  font-size: 0.8rem;
  padding: 6px 14px;
  border-radius: 999px;
  cursor: pointer;
  color: #1c2a3a;
  opacity: 0.5;
  transition: all 0.2s ease;
}

#btn-en.ativo { background: var(--tangerine); color: #fff; opacity: 1; }
#btn-pt.ativo { background: var(--matcha); color: #fff; opacity: 1; }

/* -------- grid bento -------- */
.grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  align-items: start;
  gap: 1.1rem;
}

.coluna {
  display: flex;
  flex-direction: column;
  gap: 1.1rem;
}

.card {
  border-radius: 20px;
  padding: 1.6rem;
  box-shadow: 0 14px 30px rgba(0,0,0,0.14);
  transition: transform 0.25s ease, box-shadow 0.25s ease;
  animation: subir 0.6s ease both;
}

.card:hover {
  transform: translateY(-6px);
  box-shadow: 0 22px 40px rgba(0,0,0,0.22);
}

@keyframes subir {
  from { opacity: 0; transform: translateY(18px); }
  to   { opacity: 1; transform: translateY(0); }
}

.d1 { animation-delay: 0.05s; }
.d2 { animation-delay: 0.15s; }
.d3 { animation-delay: 0.25s; }
.d4 { animation-delay: 0.35s; }
.d5 { animation-delay: 0.45s; }
.d6 { animation-delay: 0.55s; }

.card.branco { background: rgba(255,255,255,0.95); }
.card.matcha { background: var(--matcha); color: #ffffff; }
.card.blush  { background: var(--blush); color: #ffffff; }
.card.tangerine { background: var(--tangerine); color: #ffffff; }

.card .rotulo {
  display: flex;
  justify-content: space-between;
  align-items: baseline;
  font-size: 0.78rem;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  font-weight: 400;
  opacity: 0.75;
  padding-bottom: 0.7rem;
  margin-bottom: 1rem;
  border-bottom: 1px solid rgba(0,0,0,0.08);
}

.card.matcha .rotulo, .card.blush .rotulo, .card.tangerine .rotulo {
  border-bottom: 1px solid rgba(255,255,255,0.25);
}

.item + .item { margin-top: 1.1rem; padding-top: 1.1rem; border-top: 1px solid rgba(0,0,0,0.07); }
.card.matcha .item + .item, .card.blush .item + .item, .card.tangerine .item + .item {
  border-top: 1px solid rgba(255,255,255,0.2);
}

.item h3 { margin: 0 0 0.3rem; font-size: 1.02rem; font-weight: 800; }
.item .sub { font-size: 0.85rem; opacity: 0.7; font-weight: 600; margin-bottom: 0.4rem; }
.item p { margin: 0; font-size: 0.9rem; line-height: 1.5; opacity: 0.85; }

/* -------- mini projetos dentro do card de experiência -------- */
.sub-rotulo {
  font-size: 0.7rem;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  font-weight: 800;
  opacity: 0.55;
  margin: 1.1rem 0 0.6rem;
}

.projeto-mini {
  border-left: 3px solid var(--tangerine);
  padding-left: 0.7rem;
  margin-bottom: 0.6rem;
}
.projeto-mini:nth-child(odd) { border-left-color: var(--blush); }

.projeto-mini strong { font-size: 0.88rem; font-weight: 800; }
.projeto-mini span { display: block; font-size: 0.8rem; opacity: 0.75; line-height: 1.4; }

/* skills */
.pills { display: flex; flex-wrap: wrap; gap: 0.5rem; }
.pill {
  font-size: 0.82rem;
  font-weight: 800;
  padding: 0.4rem 0.9rem;
  border-radius: 999px;
  color: #fff;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.pill:hover {
  transform: scale(1.12) rotate(-3deg);
  box-shadow: 0 8px 16px rgba(0,0,0,0.2);
}
.pill.p1 { background: var(--tangerine); }
.pill.p2 { background: var(--sea-escuro); }
.pill.p3 { background: var(--blush); }
.pill.p4 { background: var(--matcha); }

/* botões (contato e github) */
.botoes { display: flex; flex-direction: column; gap: 0.6rem; }
.botao {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: rgba(255,255,255,0.18);
  border: 1px solid rgba(255,255,255,0.35);
  border-radius: 999px;
  padding: 0.7rem 1.1rem;
  font-weight: 700;
  font-size: 0.92rem;
  color: #fff;
  text-decoration: none;
}

.botao.pequeno {
  padding: 0.55rem 1rem;
  font-size: 0.85rem;
}

footer {
  display: flex;
  justify-content: space-between;
  margin-top: 3vh;
  font-size: 0.85rem;
  color: var(--sea-escuro);
  opacity: 0.85;
}

@media (max-width: 900px) {
  .grid { grid-template-columns: 1fr; }
}
</style>
</head>
<body>
<div class="wrap">

  <div class="topo">
    <div class="avatar"><img src="http://ana-julia.local/wp-content/uploads/2026/08/WhatsApp-Image-2026-08-13-at-00.55.41-e1786593381238.jpeg" alt="Ana Julia"></div>
    <div class="marca">
      <h1>Ana Julia Velasque</h1>
      <div class="status">
        <span class="dot"></span>
        <span data-en="Open to work" data-pt="Disponível para trabalho">Open to work</span>
      </div>
    </div>
    <div class="lang-toggle">
      <button id="btn-en" class="ativo" onclick="setLang('en')">EN</button>
      <button id="btn-pt" onclick="setLang('pt')">PT</button>
    </div>
  </div>

  <div class="grid">

    <div class="coluna">
    <div class="card branco c-experiencia d1">
      <div class="rotulo">
        <span data-en="Experience" data-pt="Experiência">Experience</span>
      </div>
      <div class="item">
        <h3 data-en="Software Developer // dti digital" data-pt="Desenvolvedora de Software // dti digital">Software Developer // dti digital</h3>
        <div class="sub" data-en="Brazil · Jul 2021 – Feb 2026" data-pt="Brasil · Jul 2021 – Fev 2026">Brazil · Jul 2021 – Feb 2026</div>
        <p data-en="Full-stack development with Java, .NET, React and Angular — building and maintaining features, working with SQL/MongoDB, and testing across the software lifecycle in Agile teams (Scrum/Kanban)."
           data-pt="Desenvolvimento full-stack com Java, .NET, React e Angular — construindo e mantendo funcionalidades, trabalhando com SQL/MongoDB, e testando ao longo do ciclo de desenvolvimento em times ágeis (Scrum/Kanban).">
          Full-stack development with Java, .NET, React and Angular — building and maintaining features, working with SQL/MongoDB, and testing across the software lifecycle in Agile teams (Scrum/Kanban).
        </p>

        <div class="sub-rotulo" data-en="Projects" data-pt="Projetos">Projects</div>
        <div class="projeto-mini">
          <strong data-en="Formula Cefast" data-pt="Formula Cefast">Formula Cefast</strong>
          <span data-en="Marketing &amp; IT · 2020–2021 — Content, social media and the team's WordPress site."
                data-pt="Marketing &amp; IT · 2020–2021 — Conteúdo, redes sociais e o site da equipe em WordPress.">
            Marketing &amp; IT · 2020–2021 — Content, social media and the team's WordPress site.
          </span>
        </div>
        <div class="projeto-mini">
          <strong data-en="Elas.net" data-pt="Elas.net">Elas.net</strong>
          <span data-en="Volunteer · 2021 — Content and events encouraging women in tech."
                data-pt="Voluntariado · 2021 — Conteúdo e eventos incentivando mulheres na tecnologia.">
            Volunteer · 2021 — Content and events encouraging women in tech.
          </span>
        </div>
      </div>
    </div>
    </div>

    <div class="coluna">
    <div class="card branco c-educacao d2">
      <div class="rotulo" data-en="Education" data-pt="Formação">Education</div>
      <div class="item">
        <h3 data-en="Bachelor of Computer Science Engineering" data-pt="Bacharelado em Engenharia da Computação">Bachelor of Computer Science Engineering</h3>
        <div class="sub" data-en="Federal Center of Technological Education of Minas Gerais, Brazil · 2020 – 2025"
                         data-pt="Centro Federal de Educação Tecnológica de Minas Gerais, Brasil · 2020 – 2025">
          Federal Center of Technological Education of Minas Gerais, Brazil · 2020 – 2025
        </div>
      </div>
    </div>

    <div class="card matcha c-certs d3">
      <div class="rotulo" data-en="Certifications" data-pt="Certificações">Certifications</div>
      <div class="item">
        <h3>CELPIP - General</h3>
        <div class="sub" data-en="Average Score: 11 · August 2026" data-pt="Pontuação Média: 11 · Agosto de 2026">Average Score: 11 · August 2026</div>
      </div>
    </div>

    <div class="card tangerine c-code d4">
      <div class="rotulo" data-en="Code" data-pt="Código">Code</div>
      <div class="item">
        <a class="botao pequeno" href="#" target="_blank">GitHub ↗</a>
      </div>
    </div>
    </div>

    <div class="coluna">
    <div class="card branco c-skills d5">
      <div class="rotulo">
        <span data-en="Skills" data-pt="Habilidades">Skills</span>
      </div>
      <div class="pills">
        <span class="pill p1">Java</span>
        <span class="pill p2">.NET</span>
        <span class="pill p3">React</span>
        <span class="pill p4">Angular</span>
        <span class="pill p2">SQL</span>
        <span class="pill p1">MongoDB</span>
        <span class="pill p4">Scrum</span>
        <span class="pill p3">Kanban</span>
        <span class="pill p4" data-en="Portuguese" data-pt="Português">Portuguese</span>
        <span class="pill p2" data-en="English" data-pt="Inglês">English</span>
      </div>
    </div>

    <div class="card blush c-contato d6">
      <div class="rotulo">
        <span data-en="Contact" data-pt="Contato">Contact</span>
      </div>
      <div class="botoes">
        <a class="botao" href="mailto:anajvelasque@gmail.com" data-en="Email me ↗" data-pt="Enviar e-mail ↗">Email me ↗</a>
        <a class="botao" href="https://www.linkedin.com/in/anajvelasque/" target="_blank" data-en="LinkedIn ↗" data-pt="LinkedIn ↗">LinkedIn ↗</a>
        <a class="botao" href="#" data-en="Download CV ↓" data-pt="Baixar CV ↓">Download CV ↓</a>
      </div>
    </div>
    </div>

  </div>

  <footer>
    <span>&copy; 2026</span>
    <span data-en="Created by Ana Julia" data-pt="Criado por Ana Julia">Created by Ana Julia</span>
  </footer>

</div>

<script>
  function setLang(lang) {
    document.querySelectorAll('[data-' + lang + ']').forEach(function(el) {
      el.innerHTML = el.getAttribute('data-' + lang);
    });
    document.getElementById('btn-en').classList.toggle('ativo', lang === 'en');
    document.getElementById('btn-pt').classList.toggle('ativo', lang === 'pt');
    document.documentElement.lang = lang;
  }
</script>
</body>
</html>
