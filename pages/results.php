<?php
$results = [
  [
    "subject" => "Math",
    "student" => "Aliou Diop",
    "score" => 85,
    "teacher" => "Mr. Ndiaye",
    "class" => "6ème",
    "date" => "2024-11-15"
  ],
  [
    "subject" => "Physics",
    "student" => "Awa Diallo",
    "score" => 90,
    "teacher" => "Mrs. Ba",
    "class" => "Terminale S",
    "date" => "2024-11-14"
  ],
  [
    "subject" => "History",
    "student" => "Mamadou Sow",
    "score" => 75,
    "teacher" => "Mr. Faye",
    "class" => "4ème",
    "date" => "2024-11-13"
  ]
];
?>

<div class="flex-1 table-container">
  <div class="row row-between">
    <h2>All Results</h2>
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
        <th>Subject</th>
        <th>Student</th>
        <th>Score</th>
        <th>Teacher</th>
        <th>Class</th>
        <th>Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($results as $result): ?>
        <tr>
          <td><?= htmlspecialchars($result['subject']) ?></td>
          <td><?= htmlspecialchars($result['student']) ?></td>
          <td><?= htmlspecialchars($result['score']) ?></td>
          <td><?= htmlspecialchars($result['teacher']) ?></td>
          <td><?= htmlspecialchars($result['class']) ?></td>
          <td><?= htmlspecialchars($result['date']) ?></td>
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
      <label for="firstname">Firstname</label>
      <input type="text" name="firstname" id="firstname" />
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" />
    </div>
  </form>
</div>