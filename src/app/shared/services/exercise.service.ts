import { Injectable } from '@angular/core';
import { Exercise } from './exercise.interface';

@Injectable({
  providedIn: 'root',
})
export class ExerciseService {

  public exercises: Exercise[] = [
    {
      title: 'Supino Inclinado',
      description: 'Descrição Supino Inclinado',
      id: 0,
    },
    { title: 'Puxada Frontal', description: 'Descrição Puxada Frontal', id: 1 },
    {
      title: 'Tríceps Francês',
      description: 'Descrição Tríceps Francês',
      id: 2,
    },
  ];

  public getElements(): Exercise[] {
    return this.exercises;
  }

  public add(exercise: Exercise): void {
    this.exercises.push(exercise);
  }

  public exclude(element: Exercise): void {
    const index = this.exercises.indexOf(element);
    this.exercises.splice(index, 1);
  }
}
