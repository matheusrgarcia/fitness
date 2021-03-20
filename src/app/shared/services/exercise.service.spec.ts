import { TestBed } from '@angular/core/testing';

import { ExerciseService } from './exercise.service';

describe('ExerciseService', () => {
  let service: ExerciseService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ExerciseService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });

  it('should add a exercise', () => {
    const exercise = { title: 'exercicio', description: 'descrição', id: 22 };
    service.add(exercise);
    const size = service.exercises.length - 1;
    expect(service.exercises[size]).toEqual(exercise);
  });

  it('should remove a exercise', () => {
    service.exclude({
      title: 'Puxada Frontal',
      description: 'Descrição Puxada Frontal',
      id: 1,
    });
    expect(service.exercises.length).toBe(2);
  });

  it('should return all exercises', () => {
    expect(service.getElements()).toEqual([
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
    ]);
  });
});
