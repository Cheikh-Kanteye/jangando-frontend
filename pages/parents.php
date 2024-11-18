<?php
$parents = [
  [
    "info" => "Mr. Ndiaye",
    "student_name" => "Aissatou Ndiaye",
    "phone" => "+221 77 123 45 67",
    "address" => "Dakar, Senegal"
  ],
  [
    "info" => "Mrs. Diop",
    "student_name" => "Aliou Diop",
    "phone" => "+221 76 987 65 43",
    "address" => "Thies, Senegal"
  ],
  [
    "info" => "Mr. Faye",
    "student_name" => "Fatou Faye",
    "phone" => "+221 78 456 32 10",
    "address" => "Saint-Louis, Senegal"
  ]
];
?>

<div class="flex-1 table-container">
  <div class="row row-between">
    <h2>All Parents</h2>
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
        <th>Info</th>
        <th>Student Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($parents as $parent): ?>
        <tr>
          <td><?= htmlspecialchars($parent['info']) ?></td>
          <td><?= htmlspecialchars($parent['student_name']) ?></td>
          <td><?= htmlspecialchars($parent['phone']) ?></td>
          <td><?= htmlspecialchars($parent['address']) ?></td>
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