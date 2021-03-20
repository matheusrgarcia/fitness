import { ComponentFixture, TestBed } from '@angular/core/testing';
import {
  FormBuilder,
  FormControl,
  FormsModule,
  ReactiveFormsModule,
  Validators,
} from '@angular/forms';
import { MatButtonModule } from '@angular/material/button';
import { MatCardModule } from '@angular/material/card';
import { MatFormFieldModule } from '@angular/material/form-field';
import { MatIconModule } from '@angular/material/icon';
import { MatInputModule } from '@angular/material/input';
import { MatListModule } from '@angular/material/list';
import { MatSidenavModule } from '@angular/material/sidenav';
import { MatToolbarModule } from '@angular/material/toolbar';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { of } from 'rxjs';
import { ExerciseService } from '../../services/exercise.service';

import { ExerciseComponent } from './exercise.component';

describe('ExerciseComponent', () => {
  let component: ExerciseComponent;
  let fixture: ComponentFixture<ExerciseComponent>;
  let exerciseServiceStub;
  const formBuilder: FormBuilder = new FormBuilder();

  beforeEach(async () => {
    exerciseServiceStub = jasmine.createSpyObj('ExerciseService', [
      'getElements',
      'add',
      'exclude',
    ]);
    exerciseServiceStub.getElements.and.returnValue([
      {
        title: 'Supino Inclinado',
        description: 'Descrição Supino Inclinado',
        id: 0,
      },
      {
        title: 'Puxada Frontal',
        description: 'Descrição Puxada Frontal',
        id: 1,
      },
      {
        title: 'Tríceps Francês',
        description: 'Descrição Tríceps Francês',
        id: 2,
      },
    ]);

    await TestBed.configureTestingModule({
      declarations: [ExerciseComponent],
      imports: [
        FormsModule,
        ReactiveFormsModule,
        MatCardModule,
        BrowserAnimationsModule,
        MatSidenavModule,
        MatToolbarModule,
        MatIconModule,
        MatListModule,
        MatButtonModule,
        MatInputModule,
        MatFormFieldModule,
      ],
      providers: [
        {
          provide: ExerciseService,
          useValue: exerciseServiceStub,
        },
      ],
    }).compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ExerciseComponent);
    component = fixture.componentInstance;
    component.exerciseForm = formBuilder.group({
      title: new FormControl('Título Exercício'),
      description: new FormControl('Teste exercício description'),
    });
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });

  it('should reset selections', () => {
    component.resetSelection();
    fixture.detectChanges();
    expect(component.selectedExercise).toBeFalsy();
  });

  it('should submit when onSubmit is invoked and form is valid', () => {
    component.exerciseForm.controls.title.setValue('Title test');
    component.exerciseForm.controls.description.setValue('Description test');

    component.onSubmit();
    fixture.detectChanges();

    expect(exerciseServiceStub.add).toHaveBeenCalledOnceWith({
      title: 'Title test',
      description: 'Description test',
    });
  });

  it('should exclude a exercise', () => {
    component.selectedExercise = {
      title: 'Puxada Frontal',
      description: 'Descrição Puxada Frontal',
      id: 1,
    };
    fixture.detectChanges();
    component.exclude();

    expect(exerciseServiceStub.exclude).toHaveBeenCalledOnceWith({
      title: 'Puxada Frontal',
      description: 'Descrição Puxada Frontal',
      id: 1,
    });
  });

  it('should not exclude a exercise when nothing is selected', () => {
    component.selectedExercise = null;
    fixture.detectChanges();
    component.exclude();

    expect(exerciseServiceStub.exclude).not.toHaveBeenCalled();
  });

  it('should not submit when onSubmit is invoked and form is invalid', () => {
    for (const control in component.exerciseForm.controls) {
      if (control) {
        component.exerciseForm.controls[control].setErrors(
          Validators.nullValidator
        );
      }
    }
    fixture.detectChanges();
    component.onSubmit();

    expect(exerciseServiceStub.add).not.toHaveBeenCalled();
  });

  it('should select a exercise', () => {
    component.selectExercise({
      title: 'Supino Inclinado',
      description: 'Descrição Supino Inclinado',
      id: 0,
    });
    expect(component.selectedExercise).toEqual({
      title: 'Supino Inclinado',
      description: 'Descrição Supino Inclinado',
      id: 0,
    });
  });
});
