import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup, Validators } from '@angular/forms';
import { Exercise } from '../../services/exercise.interface';
import { ExerciseService } from '../../services/exercise.service';

@Component({
  selector: 'app-exercise',
  templateUrl: './exercise.component.html',
  styleUrls: ['./exercise.component.scss']
})
export class ExerciseComponent implements OnInit {
  public exerciseForm: FormGroup;
  public exercises: Exercise[];
  public selectedExercise: Exercise;

  constructor(
    private formBuilder: FormBuilder,
    private exerciseService: ExerciseService
  ) {
    this.exerciseForm = this.formBuilder.group({
      title: new FormControl('', Validators.min(1)),
      description: new FormControl('', Validators.required),
    });
  }

  public ngOnInit(): void {
    this.exercises = this.exerciseService.getExercises();
  }

  public resetSelection(): void {
    this.selectedExercise = null;
  }

  public onSubmit(): void {
    if (this.exerciseForm.valid) {
      this.exerciseService.addExercise(this.exerciseForm.value);
      this.exerciseForm.reset();
      this.exerciseForm.markAsUntouched();
    }
  }

  public selectExercise(exercise: Exercise): void {
    this.selectedExercise = exercise;
  }

  public excludeExercise(): void {
    if (this.selectedExercise) {
      this.exerciseService.excludeExercise(this.selectedExercise);
    }
    this.resetSelection();
  }
}
