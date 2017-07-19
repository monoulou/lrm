<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_82065a5001944024c0a6986167041daa4e7858d7009564b5117d8498335295f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b40d5073f49d3388f895e51a7f7f600f32e751eeb625959c81a39f5ab3cc0c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b40d5073f49d3388f895e51a7f7f600f32e751eeb625959c81a39f5ab3cc0c28->enter($__internal_b40d5073f49d3388f895e51a7f7f600f32e751eeb625959c81a39f5ab3cc0c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_a327d08eb78548df85582fd8b804893bc3f003ad23e1860b154f914965001f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a327d08eb78548df85582fd8b804893bc3f003ad23e1860b154f914965001f5a->enter($__internal_a327d08eb78548df85582fd8b804893bc3f003ad23e1860b154f914965001f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_b40d5073f49d3388f895e51a7f7f600f32e751eeb625959c81a39f5ab3cc0c28->leave($__internal_b40d5073f49d3388f895e51a7f7f600f32e751eeb625959c81a39f5ab3cc0c28_prof);

        
        $__internal_a327d08eb78548df85582fd8b804893bc3f003ad23e1860b154f914965001f5a->leave($__internal_a327d08eb78548df85582fd8b804893bc3f003ad23e1860b154f914965001f5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
