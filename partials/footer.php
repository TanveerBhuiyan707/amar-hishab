<!-- partials/footer.php -->
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <div class="support-bar">
  <div class="support-left">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="whatsapp-icon">
    <div>
      <div class="support-title">হেল্পের প্রয়োজন?</div>
      <div class="support-subtitle">এজেন্টদের কাছ থেকে সহায়তা নিন</div>
    </div>
  </div>
  <button class="chat-button">লাইভ চ্যাট</button>
</div>

<style>
    .support-bar {
  position: relative;
  bottom: 0;
  left: 0;
  right: 0;
  background: #fff;
  padding: 0.0rem .5rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.1);
  z-index: 1000;
}

.support-left {
  display: flex;
  align-items: center;
  gap: 0.6rem;
}

.whatsapp-icon {
  width: 32px;
  height: 32px;
}

.support-title {
  font-weight: bold;
  font-size: 0.9rem;
  color: #333;
}

.support-subtitle {
  font-size: 0.8rem;
  color: #666;
}

.chat-button {
  background-color: #007bff;
  color: white;
  padding: 0.5rem 1rem;
  border: none;
  border-radius: 6px;
  font-size: 0.85rem;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.chat-button:hover {
  background-color: #0056b3;
}

</style>
</body>
</html>
