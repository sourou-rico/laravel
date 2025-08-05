{{-- Champ Titre --}}
<div class="mb-6">
    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
        Titre de l'article <span class="text-red-500">*</span>
    </label>
    <input type="text"
           id="title"
           name="title"
           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror"
           placeholder="Entrez le titre de votre article"
           value="{{ old('title') }}"
           required>
    @error('title')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- Champ Corps de l'article --}}
<div class="mb-6">
    <label for="body" class="block text-sm font-medium text-gray-700 mb-2">
        Contenu de l'article <span class="text-red-500">*</span>
    </label>
    <textarea id="body"
              name="body"
              rows="8"
              class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('body') border-red-500 @enderror"
              placeholder="Rédigez le contenu de votre article..."
              required>{{ old('body') }}</textarea>
    @error('body')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- Champ Auteur de l'article --}}
<div class="mb-6">
    <label for="user_id" class="block text-sm font-medium text-gray-700 mb-2">
        Auteur de l'article <span class="text-red-500">*</span>
    </label>
    <select id="user_id"
            name="user_id"
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('user_id') border-red-500 @enderror"
            required>
        <option value="">Sélectionnez un auteur</option>
        @foreach($users as $user)
            <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                {{ $user->name }}
            </option>
        @endforeach
    </select>
    @error('user_id')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- Champ Image --}}
<div class="mb-6">
    <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
        Image de l'article
    </label>
    <input type="file"
           id="image"
           name="image"
           accept="image/*"
           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('image') border-red-500 @enderror">
    @error('image')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
    <p class="mt-1 text-sm text-gray-500">
        Formats acceptés : JPG, PNG, GIF (max 2MB)
    </p>
</div>
