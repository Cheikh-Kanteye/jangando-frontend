<?php
$exams = [
  [
    'subject' => 'Mathematics',
    'class' => 'L2 Computer Science',
    'teacher' => 'Dr. Faye',
    'date' => '2024-11-20',
  ],
  [
    'subject' => 'Physics',
    'class' => 'L1 Physics',
    'teacher' => 'Dr. Ndiaye',
    'date' => '2024-11-22',
  ],
];
?>

<div class="flex-1 table-container">
  <div class="row row-between">
    <h2>All Exams</h2>
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
      <button class="add-btn" type="button"><i class="ri-add-line"></i></button>
    </div>
  </div>

  <table>
    <thead>
      <tr>
        <th>Subject</th>
        <th>Class</th>
        <th>Teacher</th>
        <th>Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($exams as $exam): ?>
        <tr>
          <td><?= htmlspecialchars($exam['subject']); ?></td>
          <td><?= htmlspecialchars($exam['class']); ?></td>
          <td><?= htmlspecialchars($exam['teacher']); ?></td>
          <td><?= htmlspecialchars($exam['date']); ?></td>
          <td class="row">
            <button><i class="ri-edit-box-line"></i></button>
            <button><i class="ri-delete-bin-6-line"></i></button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <div class="form-container">
    <form method="POST" action="">
      <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" placeholder="e.g., Mathematics" required />
      </div>
      <div class="form-group">
        <label for="class">Class</label>
        <input type="text" name="class" id="class" placeholder="e.g., L2 Computer Science" required />
      </div>
      <div class="form-group">
        <label for="teacher">Teacher</label>
        <input type="text" name="teacher" id="teacher" placeholder="e.g., Dr. Ndiaye" required />
      </div>
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name="date" id="date" required />
      </div>
      <button type="submit">Add Exam</button>
    </form>
  </div>
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