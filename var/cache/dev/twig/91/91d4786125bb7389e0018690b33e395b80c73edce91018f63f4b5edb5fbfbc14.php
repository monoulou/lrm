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
        $__internal_eee0c6c381833f278bfb7434b5481235ca3acfb1d8604941f686429e0ee8e963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee0c6c381833f278bfb7434b5481235ca3acfb1d8604941f686429e0ee8e963->enter($__internal_eee0c6c381833f278bfb7434b5481235ca3acfb1d8604941f686429e0ee8e963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_4b6dffe2f2f846bd72544ca754d2f040472510102a04563e1db373bdd06823ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6dffe2f2f846bd72544ca754d2f040472510102a04563e1db373bdd06823ac->enter($__internal_4b6dffe2f2f846bd72544ca754d2f040472510102a04563e1db373bdd06823ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_eee0c6c381833f278bfb7434b5481235ca3acfb1d8604941f686429e0ee8e963->leave($__internal_eee0c6c381833f278bfb7434b5481235ca3acfb1d8604941f686429e0ee8e963_prof);

        
        $__internal_4b6dffe2f2f846bd72544ca754d2f040472510102a04563e1db373bdd06823ac->leave($__internal_4b6dffe2f2f846bd72544ca754d2f040472510102a04563e1db373bdd06823ac_prof);

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
