<header>
    <div class="nav-bar">
        <div class="navegacao">
            <li><a href="">Agendar</a></li>
            <li><a href="">Meus Agendamentos</a></li>
            <li><a href="">Dúvidas</a></li>
        </div>
        <div class="cadastro_login">
            <a href="/cadastro">Cadastrar</a>
            <select class="login-select" onchange="handleSelectChange(this)">
                <option value="">Entrar</option>
                <option value="/login">Entrar como Paciente</option>
                <option value="/loginMedico">Entrar como Médico</option>
            </select>
        </div>
    </div>
</header>

{{-- Pequeno Script para selecionar o valor da rota --}}
<script>
    function handleSelectChange(select) {
        const selectedValue = select.value;
        if (selectedValue) {
            window.location.href = selectedValue;
        }
    }
</script>
