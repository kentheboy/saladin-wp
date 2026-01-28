async function loadPosts() {
  const res = await fetch('/wp-json/wp/v2/posts?per_page=5&_embed');
  if (!res.ok) throw new Error('Request failed: ' + res.status);

  const posts = await res.json();

  console.log(posts);
}

async function loadCategories() {
  const res = await fetch('/wp-json/wp/v2/categories');
  if (!res.ok) throw new Error('Request failed: ' + res.status);

  const categories = await res.json();

  console.log(categories);
}


loadPosts().catch(console.error);
loadCategories().catch(console.error);
