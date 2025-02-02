export default function agendar() {
  const selectAgendar = document.getElementById("agendar");
  const motivoTextarea = document.getElementById("motivo");
  const motivoLabel = document.querySelector(".motivo");

  selectAgendar.addEventListener("change", () => {
    if (selectAgendar.value === "vacina") {
      motivoTextarea.style.display = "none";
      motivoLabel.style.display = "none";
    } else {
      motivoTextarea.style.display = "block";
      motivoLabel.style.display = "block";
    }
  });
}
