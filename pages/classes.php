<?php
$classes = [
  [
    'class_name' => 'Class A',
    'capacity' => '30',
    'grade' => '10th Grade',
    'supervisor' => 'Mr. Diallo',
  ],
  [
    'class_name' => 'Class B',
    'capacity' => '25',
    'grade' => '11th Grade',
    'supervisor' => 'Mrs. Diop',
  ],
];
?>

<div class="flex-1 table-container">
  <div class="row row-between">
    <h2>All Classes</h2>
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
        <th>Class name</th>
        <th>Capacity</th>
        <th>Grade</th>
        <th>Supervisor</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($classes as $class): ?>
        <tr>
          <td><?= htmlspecialchars($class['class_name']); ?></td>
          <td><?= htmlspecialchars($class['capacity']); ?></td>
          <td><?= htmlspecialchars($class['grade']); ?></td>
          <td><?= htmlspecialchars($class['supervisor']); ?></td>
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
  <form method="POST">
    <div class="form-group">
      <label for="class_name">Class Name</label>
      <input type="text" name="class_name" id="class_name" placeholder="e.g., Class A" required />
    </div>
    <div class="form-group">
      <label for="capacity">Capacity</label>
      <input type="number" name="capacity" id="capacity" placeholder="e.g., 30" required />
    </div>
    <div class="form-group">
      <label for="grade">Grade</label>
      <input type="text" name="grade" id="grade" placeholder="e.g., 10th Grade" required />
    </div>
    <div class="form-group">
      <label for="supervisor">Supervisor</label>
      <input type="text" name="supervisor" id="supervisor" placeholder="e.g., Mr. Diallo" required />
    </div>
    <button type="submit">Add Class</button>
  </form>
</div>