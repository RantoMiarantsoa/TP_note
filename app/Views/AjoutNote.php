
<h2>Ajouter une note</h2>
<form action="/note/create" method="post">
	<div>
		<label for="etudiant_id">ID Étudiant :</label>
		<input type="number" id="etudiant_id" name="etudiant_id" required>
	</div>
	<div>
		<label for="matiere">Matière :</label>
		<input type="text" id="matiere" name="matiere" required>
	</div>
	<div>
		<label for="note">Note :</label>
		<input type="number" id="note" name="note" step="0.01" min="0" max="20" required>
	</div>
	<div>
		<button type="submit">Ajouter</button>
	</div>
</form>
