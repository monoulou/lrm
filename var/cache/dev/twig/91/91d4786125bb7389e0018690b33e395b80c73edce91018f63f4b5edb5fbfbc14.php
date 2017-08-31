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
        $__internal_cd4d24ee1b3b477e64b647b17788e6ba04960f217a3220f981d54f2da4772f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4d24ee1b3b477e64b647b17788e6ba04960f217a3220f981d54f2da4772f81->enter($__internal_cd4d24ee1b3b477e64b647b17788e6ba04960f217a3220f981d54f2da4772f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2c79417dc689441d465d4fcc7fcb76bd3819dea0c984aff9a241c7ff465a1dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c79417dc689441d465d4fcc7fcb76bd3819dea0c984aff9a241c7ff465a1dba->enter($__internal_2c79417dc689441d465d4fcc7fcb76bd3819dea0c984aff9a241c7ff465a1dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_cd4d24ee1b3b477e64b647b17788e6ba04960f217a3220f981d54f2da4772f81->leave($__internal_cd4d24ee1b3b477e64b647b17788e6ba04960f217a3220f981d54f2da4772f81_prof);

        
        $__internal_2c79417dc689441d465d4fcc7fcb76bd3819dea0c984aff9a241c7ff465a1dba->leave($__internal_2c79417dc689441d465d4fcc7fcb76bd3819dea0c984aff9a241c7ff465a1dba_prof);

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
