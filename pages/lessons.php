<?php
$lessons = [
  [
    "subject_name" => "Analyse Mathématique",
    "class" => "L1 Mathématiques",
    "teacher" => "Dr. Ndiaye",
    "ue" => "Fondements Mathématiques",
    "credits" => 6
  ],
  [
    "subject_name" => "Histoire Contemporaine",
    "class" => "L2 Histoire",
    "teacher" => "Pr. Diop",
    "ue" => "Histoire Générale",
    "credits" => 4
  ],
  [
    "subject_name" => "Physique Quantique",
    "class" => "M1 Physique",
    "teacher" => "Dr. Faye",
    "ue" => "Physique Fondamentale",
    "credits" => 5
  ]
];
?>

<div class="flex-1 table-container">
  <div class="row row-between">
    <h2>All Lessons</h2>
    <div class="row">
      <div class="row search-input">
        <i class="ri-search-line"></i>
        <input
          type="text"
          placeholder="Search from table..."
          name="search"
          id="search" />
      </div>
      <button><i class="ri-equalizer-line"></i></button>
      <button><i class="ri-sort-desc"></i></button>
      <button type="button" class="add-btn"><i class="ri-add-line"></i></button>
    </div>
  </div>

  <table>
    <thead>
      <tr>
        <th>UE</th>
        <th>Subject Name</th>
        <th>Class</th>
        <th>Credits</th>
        <th>Teacher</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($lessons as $lesson): ?>
        <tr>
          <td><?= htmlspecialchars($lesson['ue']) ?></td>
          <td><?= htmlspecialchars($lesson['subject_name']) ?></td>
          <td><?= htmlspecialchars($lesson['class']) ?></td>
          <td><?= htmlspecialchars($lesson['credits']) ?></td>
          <td><?= htmlspecialchars($lesson['teacher']) ?></td>
          <td class="row">
            <button><i class="ri-edit-box-line"></i></button>
            <button><i class="ri-delete-bin-6-line"></i></button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<div class="form-container">
  <form>
    <div class="form-group">
      <label for="ue">Unité d'Enseignement (UE)</label>
      <input type="text" name="ue" id="ue" />
    </div>
    <div class="form-group">
      <label for="subject_name">Subject Name</label>
      <input type="text" name="subject_name" id="subject_name" />
    </div>
    <div class="form-group">
      <label for="class">Class</label>
      <input type="text" name="class" id="class" />
    </div>
    <div class="form-group">
      <label for="credits">Credits</label>
      <input type="number" name="credits" id="credits" />
    </div>
    <div class="form-group">
      <label for="teacher">Teacher</label>
      <input type="text" name="teacher" id="teacher" />
    </div>
    <button type="submit">Add Lesson</button>
  </form>
</div>