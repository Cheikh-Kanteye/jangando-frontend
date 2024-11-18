<?php
$classesLMD = [
  [
    'subject' => 'Mathematics',
    'class' => 'Licence 2',
    'teacher' => 'Mr. Diallo',
    'due_date' => '2024-12-15',
  ],
  [
    'subject' => 'Physics',
    'class' => 'Master 1',
    'teacher' => 'Mrs. Diop',
    'due_date' => '2024-12-20',
  ],
  [
    'subject' => 'Chemistry',
    'class' => 'Master 2',
    'teacher' => 'Dr. Sow',
    'due_date' => '2024-12-25',
  ],
  [
    'subject' => 'Biology',
    'class' => 'Master 3',
    'teacher' => 'Dr. Kane',
    'due_date' => '2024-12-30',
  ],
];
?>

<div class="flex-1 table-container">
  <div class="row row-between">
    <h2>All Assignments</h2>
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
        <th>Class</th>
        <th>Teacher</th>
        <th>Due Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($classesLMD as $class): ?>
        <tr>
          <td><?= htmlspecialchars($class['subject']); ?></td>
          <td><?= htmlspecialchars($class['class']); ?></td>
          <td><?= htmlspecialchars($class['teacher']); ?></td>
          <td><?= htmlspecialchars($class['due_date']); ?></td>
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
      <label for="subject">Subject</label>
      <input type="text" name="subject" id="subject" />
    </div>
    <div class="form-group">
      <label for="class">Class</label>
      <select name="class" id="class">
        <option value="Licence">Licence</option>
        <option value="Master 1">Master 1</option>
        <option value="Master 2">Master 2</option>
        <option value="Master 3">Master 3</option>
      </select>
    </div>
    <div class="form-group">
      <label for="teacher">Teacher</label>
      <input type="text" name="teacher" id="teacher" />
    </div>
    <div class="form-group">
      <label for="due_date">Due Date</label>
      <input type="date" name="due_date" id="due_date" />
    </div>
    <button type="submit">Add Assignment</button>
  </form>
</div>