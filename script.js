function adicionarExperiencia() {
    var container = document.getElementById('experiencias');
    var novaExperiencia = document.createElement('div');
    novaExperiencia.className = 'experiencia';
    novaExperiencia.innerHTML = `
        <label for="empresa">Empresa:</label>
        <input type="text" name="empresa[]" required>
        <label for="cargo">Cargo:</label>
        <input type="text" name="cargo[]" required>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao[]" required></textarea>
    `;
    container.appendChild(novaExperiencia);
}

function adicionarFormacao() {
    var container = document.getElementById('formacoes');
    var novaFormacao = document.createElement('div');
    novaFormacao.className = 'formacao';
    novaFormacao.innerHTML = `
        <label for="instituicao">Instituição:</label>
        <input type="text" name="instituicao[]" required>
        <label for="curso">Curso:</label>
        <input type="text" name="curso[]" required>
        <label for="ano">Ano de Conclusão:</label>
        <input type="text" name="ano[]" required>
    `;
    container.appendChild(novaFormacao);
}