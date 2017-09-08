<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_cbec4e8e84cf4c4bb0064981380090709263df5245553a7c893acba77c9c5d10 extends Twig_Template
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
        $__internal_61c70b5bb76b5726c33f87c006b461cfdb0096b1028949e05ccf5a4a3ec73e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c70b5bb76b5726c33f87c006b461cfdb0096b1028949e05ccf5a4a3ec73e87->enter($__internal_61c70b5bb76b5726c33f87c006b461cfdb0096b1028949e05ccf5a4a3ec73e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c4a8bd7f3c309b757d731289ca3bb9ea3840b3d4ec2da5621f37dcf5efa2257f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a8bd7f3c309b757d731289ca3bb9ea3840b3d4ec2da5621f37dcf5efa2257f->enter($__internal_c4a8bd7f3c309b757d731289ca3bb9ea3840b3d4ec2da5621f37dcf5efa2257f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_61c70b5bb76b5726c33f87c006b461cfdb0096b1028949e05ccf5a4a3ec73e87->leave($__internal_61c70b5bb76b5726c33f87c006b461cfdb0096b1028949e05ccf5a4a3ec73e87_prof);

        
        $__internal_c4a8bd7f3c309b757d731289ca3bb9ea3840b3d4ec2da5621f37dcf5efa2257f->leave($__internal_c4a8bd7f3c309b757d731289ca3bb9ea3840b3d4ec2da5621f37dcf5efa2257f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
