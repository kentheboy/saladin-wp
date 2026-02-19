async function loadPosts() {
  const res = await fetch("/wp-json/wp/v2/posts?per_page=5&_embed");
  if (!res.ok) throw new Error("Request failed: " + res.status);

  const posts = await res.json();

  return posts;
}

async function loadCategories() {
  const res = await fetch("/wp-json/wp/v2/categories");
  if (!res.ok) throw new Error("Request failed: " + res.status);

  const categories = await res.json();

  return categories;
}

(async () => {
  let categoryList = [];

  // 1. Load categories first
  const categories = await loadCategories().catch(console.error);
  categories.forEach((category) => {
    if (category.slug === "uncategorized") return;
    const btn = document.createElement("button");
    btn.className = "filter-btn";
    btn.dataset.filter = category.slug;
    btn.textContent = category.name;
    document.querySelector(".filter-buttons").appendChild(btn);
    categoryList.push({ id: category.id, name: category.name });
  });

  // 2. Load posts only after categories are ready
  const posts = await loadPosts().catch(console.error);
  let displayedPostCount = 0;
  posts.forEach((post) => {
    if (displayedPostCount >= 5) return; // Limit to 5 posts
    const postEl = document.createElement("article");
    postEl.className = "timeline-item";
    const formattedDate = new Date(post.date).toLocaleString("en-US", { month: "long", year: "numeric" });
    postEl.innerHTML = `
      <div class="timeline-date">${formattedDate}</div>
      <span class="timeline-category">${post.categories.map(id => categoryList.find(c => c.id === id)?.name).join(", ")}</span>
      <h3 class="timeline-title">${post.title.rendered}</h3>
      ${post.excerpt.rendered}
    `;
    document.querySelector("#timeline").appendChild(postEl);
    displayedPostCount++;
  });
})();
