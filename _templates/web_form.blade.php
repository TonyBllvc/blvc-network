<form action="" method="">
    <h2>Create a Person</h2>

    <!-- Person Name -->
    <label for="name">Person Name:</label>
    <input 
      type="text" 
      id="name" 
      name="name" 
      {{-- value="{{ old('name') }}"  --}}
      required
    >

    <!-- Person Strength -->
    <label for="skill">Person Strength (0-100):</label>
    <input 
      type="number" 
      id="skill" 
      name="skill" 
      required
    >
  
    <!-- ninja Bio -->
    <label for="bio">Biography:</label>
    <textarea
      rows="5"
      id="bio" 
      name="bio" 
      required
    ></textarea>

    <!-- select a person -->
    <label for="people_id">Person:</label>
    <select id="people_id" name="people_id" required>
      <option value="" disabled selected>Select a person</option>
      
    </select>
  
    <button type="submit" class="btn mt-4">Create Person</button>
  
    <!-- validation errors -->
    
  </form>