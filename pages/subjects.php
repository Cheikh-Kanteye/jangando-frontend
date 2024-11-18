<?php
// Données des matières
$subjects = [
  [
    "name" => "Mathematics",
    "teachers" => "John Doe, Jane Smith"
  ],
  [
    "name" => "Physics",
    "teachers" => "Albert Einstein"
  ],
  [
    "name" => "Chemistry",
    "teachers" => "Marie Curie, Rosalind Franklin"
  ]
];
?>
<div class="flex-1 table-container">
  <div class="row row-between">
    <h2>All Subjects</h2>
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
        <th>Subject Name</th>
        <th>Teachers</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($subjects as $subject): ?>
        <tr>
          <td><?= htmlspecialchars($subject['name']) ?></td>
          <td><?= htmlspecialchars($subject['teachers']) ?></td>
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