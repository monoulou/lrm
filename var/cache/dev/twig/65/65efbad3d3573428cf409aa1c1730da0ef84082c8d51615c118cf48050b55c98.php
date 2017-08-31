<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_21546c9e5c52d93a4d6a73de7f066c02553282fe97d2f628f9d8deb5b1e1d7e6 extends Twig_Template
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
        $__internal_9ec4e5115066d3f370eab2e5ac77aac7cadda07056f17fc119177d15f50c5ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec4e5115066d3f370eab2e5ac77aac7cadda07056f17fc119177d15f50c5ce5->enter($__internal_9ec4e5115066d3f370eab2e5ac77aac7cadda07056f17fc119177d15f50c5ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_acab4396005b069735f1d24062bd083d9d02d98aa9cfd886c0f3c6fecb44bb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acab4396005b069735f1d24062bd083d9d02d98aa9cfd886c0f3c6fecb44bb8b->enter($__internal_acab4396005b069735f1d24062bd083d9d02d98aa9cfd886c0f3c6fecb44bb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9ec4e5115066d3f370eab2e5ac77aac7cadda07056f17fc119177d15f50c5ce5->leave($__internal_9ec4e5115066d3f370eab2e5ac77aac7cadda07056f17fc119177d15f50c5ce5_prof);

        
        $__internal_acab4396005b069735f1d24062bd083d9d02d98aa9cfd886c0f3c6fecb44bb8b->leave($__internal_acab4396005b069735f1d24062bd083d9d02d98aa9cfd886c0f3c6fecb44bb8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
