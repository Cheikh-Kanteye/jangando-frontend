<?php
$teachers = [
  [
    "info" => "Mr. Abdoulaye Diouf",
    "teacher_id" => "TCHR001",
    "subjects" => "Mathématiques, Physique",
    "classes" => "6ème, 5ème",
    "phone" => "+221 77 123 4567",
    "address" => "Dakar, Sénégal"
  ],
  [
    "info" => "Mme. Fatou Ndiaye",
    "teacher_id" => "TCHR002",
    "subjects" => "Français, Histoire",
    "classes" => "4ème, 3ème",
    "phone" => "+221 76 987 6543",
    "address" => "Thiès, Sénégal"
  ],
  [
    "info" => "Dr. Cheikh Ba",
    "teacher_id" => "TCHR003",
    "subjects" => "Biologie, Chimie",
    "classes" => "Terminale S",
    "phone" => "+221 78 654 3210",
    "address" => "Saint-Louis, Sénégal"
  ]
];
?>

<div class="flex-1 table-container">
  <div class="row row-between">
    <h2>All Teachers</h2>
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
      <button type="button" class="add-btn">
        <i class="ri-add-line"></i>
      </button>
    </div>
  </div>

  <table>
    <thead>
      <tr>
        <th>Info</th>
        <th>Teacher ID</th>
        <th>Subjects</th>
        <th>Classes</th>
        <th>Phone</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($teachers as $teacher): ?>
        <tr>
          <td><?= htmlspecialchars($teacher['info']) ?></td>
          <td><?= htmlspecialchars($teacher['teacher_id']) ?></td>
          <td><?= htmlspecialchars($teacher['subjects']) ?></td>
          <td><?= htmlspecialchars($teacher['classes']) ?></td>
          <td><?= htmlspecialchars($teacher['phone']) ?></td>
          <td class="row">
            <?= htmlspecialchars($teacher['address']) ?>
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