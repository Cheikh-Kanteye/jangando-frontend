<?php
$students = [
  [
    "info" => "Aminata Ndiaye",
    "student_id" => "SEN12345",
    "grade" => "A",
    "phone" => "+221 77 123 4567",
    "address" => "Dakar, Sénégal"
  ],
  [
    "info" => "Cheikh Fall",
    "student_id" => "SEN54321",
    "grade" => "B",
    "phone" => "+221 76 987 6543",
    "address" => "Saint-Louis, Sénégal"
  ],
  [
    "info" => "Fatou Diop",
    "student_id" => "SEN98765",
    "grade" => "A+",
    "phone" => "+221 78 654 3210",
    "address" => "Thiès, Sénégal"
  ]
];
?>

<div class="flex-1 table-container">
  <div class="row row-between">
    <h2>All Students</h2>
    <div class="row">
      <div class="row search-input">
        <i class="ri-search-line"></i>
        <input type="text" placeholder="Search..." name="search" id="search" />
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
        <th>Student ID</th>
        <th>Grade</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($students as $student): ?>
        <tr>
          <td><?= htmlspecialchars($student['info']) ?></td>
          <td><?= htmlspecialchars($student['student_id']) ?></td>
          <td><?= htmlspecialchars($student['grade']) ?></td>
          <td><?= htmlspecialchars($student['phone']) ?></td>
          <td><?= htmlspecialchars($student['address']) ?></td>
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